<?php
session_start(); // Démarrer la session

include("head.php");
?>
<meta name="description" content="Confirmation message - Harmony Digital">
<title>Confirmation message - Harmony Digital</title>

<style>
    .text-light-success {
        color: #6eff33; /* Un vert plus clair */
    }
</style>

</head>

<?php include("header.php") ?>

<div id="binary-background"></div>

<?php if (isset($_SESSION['message_sent']) && $_SESSION['message_sent'] === true): ?>
    <section class="confirmation mb-5">
        <h4 class="m-5 text-center border border-3  text-white p-2 display-6 borderColor" id="contact"><strong>MESSAGE ENVOYE</strong></h4>
        <div class="text-center">
            <div class=" fw-bold lead fs- text-light-success  text-center p-4 pb-5 ms-1 me-1 mb-5">
                <p>
                    Nous avons bien reçu votre message et nous vous confirmons que votre demande est en cours de traitement.
                </p>
            </div>
        </div>
    </section>
    <?php unset($_SESSION['message_sent']); // Supprimer la variable après l'affichage ?>
<?php else: ?>
    <!-- Message de confirmation non affiché -->
    <section class="confirmation mb-5">
        <h4 class=" borderColor m-5 text-center border border-3 rounded text-white p-2 display-6 h4Index" id="contact"><strong>Message non envoyé</strong></h4>
        <div class="text-center">
            <div class="lead text-danger fw-bold  fs-3 text-center p-4 pb-5 ms-1 me-1 mb-5">
            <p class="alert alert-danger ms-5 mt-3 fw-bold">
    Veuillez vérifier les informations suivantes :<br>
    <ul>
        <li>Assurez-vous que l'adresse email est au format correct (par exemple, <strong>nom@domaine.fr</strong> ou <strong>nom@domaine.com</strong>).</li><br>
        <li>Le numéro de téléphone doit contenir uniquement des chiffres et doit avoir entre 10 et 15 chiffres.</li><br>
        <li>Veuillez remplir tous les champs obligatoires du formulaire.</li><br>
    </ul>
</p>

            </div>
        </div>
    </section>
<?php endif; ?>

<?php include("footer.php") ?>

</body>
</html>
