
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Nettoyer et valider les données du formulaire
    $nom = htmlspecialchars(trim($_POST["lastName"]));
    $prenom = htmlspecialchars(trim($_POST["firstName"]));
    $email = filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL);
    $objet = htmlspecialchars(trim($_POST["objet"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    $telephone = preg_replace("/[^0-9]/", "", trim($_POST["phoneNumber"])); // Ne garde que les chiffres du numéro de téléphone

    // Vérifications
    $errors = [];

    if (empty($nom) || empty($prenom) || empty($objet) || empty($message) || empty($telephone)) {
        $errors[] = "Tous les champs doivent être remplis.";
    }

    if (!$email) {
        $errors[] = "Adresse email invalide.";
    }

    if (strlen($telephone) < 10 || strlen($telephone) > 15) {
        $errors[] = "Le numéro de téléphone doit contenir entre 10 et 15 chiffres.";
    }

    if (!empty($errors)) {
        // Afficher les erreurs
        foreach ($errors as $error) {
            echo '<p class="alert alert-danger ms-5 mt-3 fw-bold">' . $error . '</p>';
        }
    } else {
        // Validation reCAPTCHA
        $recaptchaResponse = $_POST['g-recaptcha-response'];
        $recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify";
        $recaptchaData = [
            'secret' => $secretKey,
            'response' => $recaptchaResponse,
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($recaptchaData),
            ],
        ];

        $context = stream_context_create($options);
        $jsonResponse = file_get_contents($recaptchaUrl, false, $context);
        $recaptchaResult = json_decode($jsonResponse, true);

        if (!$recaptchaResult['success']) {
            echo '<p class="alert alert-danger ms-5 mt-3 fw-bold">Veuillez compléter le reCAPTCHA correctement.</p>';
        } else {
            // Envoi de l'e-mail
            $messageBody = "Message envoyé de :\nNom : $nom\nPrenom : $prenom\nEmail : $email\nTéléphone : $telephone\nObjet : $objet\nMessage : $message";
            $retour = mail("harmonydigitalweb@gmail.com", $objet, $messageBody, "From: contact@harmony-digital.fr" . "\r\n" . "Reply-to: $email");

            if ($retour) {
                $_SESSION['message_sent'] = true;
                header('Location: confirmationform.php');
                exit();
            } else {
                echo '<p class="alert alert-danger ms-5 mt-3 fw-bold">Erreur lors de l\'envoi de l\'email</p>';
            }
        }
    }
}
?>



<?php include("head.php") ?>
<meta name="description" content="Vous souhaiteriez un devis ou auriez besoins de renseignements complémentaires.">
<title>Formulaire de Contact - Harmony Digital</title>

<style>
 
/* Bordure bleu foncé autour des champs de saisie avec une épaisseur accrue */
.form-control, .form-select, .form-floating textarea {
    border: 2px solid #33a5ff; 
    border-radius: 4px; 
    padding: 0.5rem; 
    box-sizing: border-box; /* Assure que la bordure est incluse dans la largeur totale */
}

.form-control:focus, .form-select:focus, .form-floating textarea:focus {
    border-color: #001a33; /* Couleur de bordure au focus pour un effet de surbrillance plus foncé */
    outline: none; /* Supprime le contour par défaut */
}


</style>

</head>


<?php include("header.php"); ?>

<div id="binary-background2"></div>

<div id="binary-background2"></div>

<h1 class="border borderColor border-4 rounded p-2 col ms-5 me-5 mt-4 text-center">
    <strong class="text-white">Formulaire De Contact</strong>
</h1>

<div class="text-center mt-5">
    <img src="images/contactRobot.png" alt="robot" class="img-fluid w-50">
</div>

<h4 class="m-5 text-center">
    <strong class="text-white">Besoin d'un devis ou d'une réponse à vos questions ?</strong>
</h4>

<h4 class="m-5 text-center">
    <strong class="text-white">Nous sommes là pour vous aider !</strong>
</h4>

<?php if (isset($_SESSION['message_sent']) && $_SESSION['message_sent'] === true): ?>
    <section class="confirmation mb-5">
        <h4 class="m-5 text-center border border-3 rounded text-white p-2 display-6 h4Index" id="contact"><strong>MESSAGE ENVOYE</strong></h4>
        <div class="text-center">
            <div class="lead text-success display-4 text-center bg-light rounded shadow p-4 pb-5 bg-white rounded ms-1 me-1 mb-5">
                <p>
                    Nous avons bien reçu votre message et nous vous confirmons que votre demande est en cours de traitement.
                </p>
            </div>
        </div>
    </section>
    <?php unset($_SESSION['message_sent']); // Supprimer la variable après l'affichage ?>
<?php endif; ?>

<form class="needs-validation ms-3 me-3" id="myForm" novalidate action="confirmationform.php" method="POST">
    <fieldset class="mb-5 ms-2 me-2">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <!-- Prénom -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="firstName" class="form-label text-white">Prénom</label>
                            <input name="firstName" type="text" id="firstName" class="form-control" placeholder="Prénom" required>
                            <div class="invalid-feedback">
                                Veuillez saisir votre prénom.
                            </div>
                        </div>
                    </div>

                    <!-- Nom -->
                    <div class="col">
                        <div class="form-outline">
                            <label for="lastName" class="form-label text-white">Nom</label>
                            <input name="lastName" type="text" id="lastName" class="form-control" placeholder="Nom" required>
                            <div class="invalid-feedback">
                                Veuillez saisir votre nom.
                            </div>
                        </div>
                    </div>

                    <!-- Téléphone -->
                    <div class="col">
                        <div class="form-outline mb-4">
                            <label for="phoneNumber" class="form-label text-white">Téléphone</label>
                            <input name="phoneNumber" type="tel" id="phoneNumber" class="form-control" placeholder="Téléphone" pattern="[0-9]{10,15}" title="Veuillez entrer un numéro de téléphone valide (10 à 15 chiffres)" required>
                            <div class="invalid-feedback">
                                Veuillez saisir un numéro de téléphone valide (10 à 15 chiffres).
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-outline mb-4">
                        <label for="email" class="form-label text-white">Adresse Email</label>
                        <div class="input-group has-validation">
                            <input name="email" type="email" id="email" class="form-control" placeholder="Email" required>
                            <div class="invalid-feedback">
                                Veuillez saisir une adresse email valide.
                            </div>
                        </div>
                    </div>

                    <!-- Sélecteur d'objet -->
                    <div class="mb-3">
                        <label for="objet" class="form-label text-white">Objet :</label>
                        <select name="objet" id="objet" class="form-select" required>
                            <option value="" disabled selected>Choisissez un objet</option>
                            <option value="Demande de devis">Demande de devis</option>
                            <option value="Besoins d'infos">Besoins d'infos</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div class="form-group">
                        <label for="message" class="mb-2 text-white">Message</label>
                        <div class="form-floating">
                            <textarea name="message" class="form-control" id="message" required></textarea>
                            <label for="message">Votre Message</label>
                            <div class="invalid-feedback">
                                Veuillez saisir votre message.
                            </div>
                        </div>
                    </div>

                    <!-- Case à cocher RGPD -->
                    <div class="form-check mb-4 mt-3">
                        <input class="form-check-input" type="checkbox" id="rgpdCheckbox" name="rgpdCheckbox" required>
                        <label class="form-check-label text-white" for="rgpdCheckbox">
                            J'accepte que mes données personnelles soient traitées conformément à <a href="politiquedeConfidentialite.php" style="color: #e06717aa;"><span class="fw-bold">Politique De Confidentialité</span></a>.
                        </label>
                        <div class="invalid-feedback">
                            Vous devez accepter la politique de confidentialité.
                        </div>
                    </div>

                    <!-- reCAPTCHA -->
                    <div class="g-recaptcha mt-4 mb-4" data-sitekey="6LeDJiQqAAAAALRhC54Yqk-PnttYsWFvK9Ev6Zew"></div>

                    <!-- Bouton d'envoi -->
                    <button type="submit" value="Valider" id="send-data" class="btn borderColor text-white fs-5 btn-block mb-4">
                        Envoyez
                    </button>
                </div>
            </div>
        </div>
    </fieldset>
</form>


<div class="row justify-content-center mt-5">
    <div class="col-md-6 text-center">
        <img src="images/robotForm.png" alt="robot" class="img-fluid mx-auto w-50">
    </div>
</div>

<?php include("footer.php"); ?>

<!-- JavaScript pour l'arrière-plan -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const typingElement = document.querySelector('#binary-background2');
        const binaryLength = 500; // Nombre total de caractères binaires à afficher
        const characters = [];

        // Créez des éléments span pour chaque caractère binaire
        for (let i = 0; i < binaryLength; i++) {
            const char = document.createElement('span');
            char.textContent = Math.round(Math.random());
            char.className = 'star';
            char.style.left = Math.random() * 100 + 'vw';
            char.style.top = Math.random() * 100 + 'vh';
            char.style.animationDelay = `${Math.random() * 5}s`; // Délai d'animation aléatoire pour chaque caractère
            typingElement.appendChild(char);
            characters.push(char);
        }

        // Fonction pour afficher les caractères un par un
        function showCharacters(index) {
            if (index < characters.length) {
                characters[index].style.opacity = 1;
                setTimeout(() => showCharacters(index + 1), 200); // Ajustez la durée pour la vitesse souhaitée
            }
        }

        showCharacters(0);
    });
</script>

  

</body>
</html>
