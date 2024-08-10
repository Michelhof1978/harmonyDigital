<?php include("head.php") ?>
<meta name="description" content="Vous souhaiteriez un devis ou auriez besoins de renseignements complémentaires.">
<title>Formulaire de Contact - Harmony Digital</title>

<style>
/* Bordure bleu foncé autour des champs de saisie avec une épaisseur accrue */
.form-control, .form-select, .form-floating textarea {
    border: 2px solid #33a5ff; /* Augmente l'épaisseur à 3px */
    border-radius: 4px; /* Optionnel : ajouter des coins arrondis */
    padding: 0.5rem; /* Optionnel : ajouter du padding */
    box-sizing: border-box; /* Assure que la bordure est incluse dans la largeur totale */
}

.form-control:focus, .form-select:focus, .form-floating textarea:focus {
    border-color: #001a33; /* Couleur de bordure au focus pour un effet de surbrillance plus foncé */
    outline: none; /* Supprimer le contour par défaut */
}


</style>

</head>

<?php include("header.php") ?>

<?php
// Clé privée reCAPTCHA 
$config = include('/config/config.php');

// Utiliser la clé secrète reCAPTCHA
$secretKey = $config['recaptcha_secret_key'];

// Initialiser le message d'erreur
$error_message = '';

$rgpdAccepted = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier que tous les champs sont remplis
    if (
        isset($_POST["firstName"]) &&
        isset($_POST["lastName"]) &&
        isset($_POST["phoneNumber"]) &&
        isset($_POST["email"]) &&
        isset($_POST["message"]) &&
        isset($_POST['g-recaptcha-response']) &&
        isset($_POST['rgpdCheckbox'])
    ) {
        // Validation du CAPTCHA
        $captchaResponse = $_POST['g-recaptcha-response'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => $secretKey,
            'response' => $captchaResponse,
            'remoteip' => $ip
        );
        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $response = json_decode($result, true);

        if ($response['success']) {
            // Le CAPTCHA est valide = traitement du formulaire
            // Validation du RGPD
            if ($_POST['rgpdCheckbox'] === 'on') {
                $rgpdAccepted = true;
            }

            // Modifier le message pour inclure l'information sur l'acceptation des RGPD
            $message = "Demande de renseignements :\n" .
                "Nom : " . htmlspecialchars($_POST["firstName"]) . "\n" .
                "Prénom : " . htmlspecialchars($_POST["lastName"]) . "\n" .
                "Téléphone : " . htmlspecialchars($_POST["phoneNumber"]) . "\n" .
                "Email : " . htmlspecialchars($_POST["email"]) . "\n" .
                "Message : " . htmlspecialchars($_POST["message"]) . "\n" .
                "RGPD accepté : " . ($rgpdAccepted ? 'Oui' : 'Non');

            $object = "Demande de renseignements";
            $retour = mail("harmonydigitalweb@gmail.com", "Nouveau Message", $message, "From: contact@Lescaravanesdelabesbre.fr" . "\r\n" . "Reply-to: " . htmlspecialchars($_POST["email"]));

            if ($retour) {
                // Redirection vers une page de confirmation après la soumission du formulaire
                echo '<script>window.location.replace("confirmationContactRenseignements.php");</script>';
                exit();
            } else {
                $error_message = "Une erreur est survenue lors de l'envoi du formulaire. Veuillez réessayer.";
            }
        } else {
            // Le CAPTCHA est invalide, affichez un message d'erreur
            $error_message = "CAPTCHA invalide, veuillez réessayer.";
        }
    } else {
        // Les champs sont manquants, afficher un message d'erreur
        $error_message = "Veuillez remplir tous les champs du formulaire.";
    }
}
?>
<div id="binary-background2"></div>
<h2 class="m-5 text-center">
        <strong class="text-warning fw-bold">FORMULAIRE EN COURS DE VALIDATION, NON OPERATIONEL
        </strong>
    </h2>
<h1 class="border borderColor border-4 rounded p-2 col ms-5 me-5 text-center">
        <strong class="text-white">Formulaire De Contact</strong>
    </h1>

    <div class="text-center mt-5">
    <img src="images/contactRobot.png" alt="robot" class="img-fluid w-50">
</div>

    <h4 class="m-5 text-center">
        <strong class="text-white">Besoin d'un devis ou d'une réponse à vos questions ?
        </strong>
    </h4>

    <h4 class="m-5 text-center">
        <strong class="text-white">Nous sommes là pour vous aider !
        </strong>
    </h4>

    <form class="needs-validation ms-3 me-3" id="myForm" onsubmit="return validateContactForm()" novalidate action="#" method="POST">
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
                            <input name="phoneNumber" type="tel" id="phoneNumber" class="form-control" placeholder="Téléphone" pattern="[0-9]{10,15}" required>
                            <div class="invalid-feedback">
                                Veuillez saisir un numéro de téléphone valide (au moins 10 chiffres).
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-outline mb-4">
                        <label for="email" class="form-label text-white">Adresse Email</label>
                        <div class="input-group has-validation">
                            <input name="email" type="email" id="email" class="form-control" placeholder="Email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|fr)$">
                            <div class="invalid-feedback">
                                Veuillez saisir une adresse email valide avec un domaine .com ou .fr.
                            </div>
                        </div>
                    </div>

                    <!-- Sélecteur d'objet -->
                    <div class="mb-3">
                        <label for="objet" class="form-label text-white">Objet :</label>
                        <select name="objet" id="objet" class="form-select">
                            <option value="proposition-emploi">Demande de devis</option>
                            <option value="proposition-projet">Besoins d'infos</option>
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
                        <input class="form-check-input" type="checkbox" id="rgpdCheckbox" name="rgpdCheckbox">
                        <label class="form-check-label text-white" for="rgpdCheckbox">
                        J'accepte que mes données personnelles soient traitées conformément à <a href="politiquedeConfidentialite.php" style="color: #e06717aa; cl">Politique De Confidentialité</a>.
                        <div class="invalid-feedback" id="rgpdError" style="display: none;">
                            Vous devez accepter la politique de confidentialité.
                        </div>
                    </div>

                    <!-- reCAPTCHA -->
                    <div class="g-recaptcha m-4" data-sitekey=""></div>

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
<?php include("footer.php") ?>

<!-- Arrière plan 0 et 1 formulaire contact-->
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

<!-- ---------------------------------------------------------------------------->

<!-- FORMULAIRE DE CONTACT -->
<script>
    function validateContactForm() {
        // Validation de l'adresse e-mail
        let emailInput = document.getElementById('email');//Obtient l'élément HTML avec l'ID "email" (champ d'adresse e-mail).
        let emailValue = emailInput.value.trim();//Obtient la valeur de l'adresse e-mail avec les espaces blancs supprimés.
        let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;//Définit une expression régulière pour valider l'adresse e-mail.

//Vérifie si la valeur de l'adresse e-mail correspond à l'expression régulière. Affiche une alerte si la validation échoue.
        if (!emailRegex.test(emailValue)) {
            alert('Veuillez saisir une adresse email valide.');
            emailInput.focus();
            return false;
        }

// Obtient l'élément HTML avec l'ID "phoneNumber" (champ de numéro de téléphone).
        let phoneNumberInput = document.getElementById("phoneNumber");
        let phoneNumberValue = phoneNumberInput.value;//Obtient la valeur du numéro de téléphone.

// Définit une expression régulière pour valider que le numéro de téléphone ne contient que des chiffres.
        let phoneRegex = /^[0-9]+$/;
//Vérifie si la valeur du numéro de téléphone correspond à l'expression régulière. Affiche une alerte si la validation échoue.
        if (!phoneRegex.test(phoneNumberValue)) {
            alert("Veuillez saisir uniquement des chiffres pour le numéro de téléphone.");
            return false;
        }

// Obtient l'élément HTML avec l'ID "rgpdCheckbox" (case à cocher RGPD).
        let rgpdCheckbox = document.getElementById('rgpdCheckbox');
        if (!rgpdCheckbox.checked) {
            alert('Vous devez accepter la politique de confidentialité.');
            rgpdCheckbox.focus();
            return false;
        }

// Obtient la réponse du reCAPTCHA.
        let recaptchaResponse = grecaptcha.getResponse();
//Vérifie si la réponse reCAPTCHA est vide. Affiche une alerte si la validation échoue.
        if (recaptchaResponse.length == 0) {
            alert('Veuillez cocher le reCAPTCHA.');
            return false;
        }
// Si toutes les validations précédentes sont réussies, la fonction renvoie true, indiquant que le formulaire est valide.
        return true;
    }
</script>
</body>
    </html>