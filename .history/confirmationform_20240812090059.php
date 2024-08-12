<?php
session_start(); // Démarrer la session

include("head.php");
?>
<meta name="description" content="Confirmation message - Harmony Digital">
<title>Confirmation message - Harmony Digital</title>
</head>

<?php include("header.php") ?>

<div id="binary-background"></div>

<?php if (isset($_SESSION['message_sent']) && $_SESSION['message_sent'] === true): ?>
    <section class="confirmation mb-5">
        <h4 class="m-5 text-center border border-3 rounded text-white p-2 display-6 h4Index" id="contact"><strong>MESSAGE ENVOYE</strong></h4>
        <div class="text-center">
            <div class=" fw-bold lead  display-4  text-center p-4 pb-5 ms-1 me-1 mb-5">
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
        <h4 class="m-5 text-center border border-3 rounded text-white p-2 display-6 h4Index" id="contact"><strong>AUCUN MESSAGE DE CONFIRMATION</strong></h4>
        <div class="text-center">
            <div class="lead text-white fw-bold  display-4 text-center p-4 pb-5 ms-1 me-1 mb-5">
                <p>
                    Aucun message de confirmation n'a été trouvé. Assurez-vous que votre message a été envoyé correctement.
                </p>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php include("footer.php") ?>

</body>
</html>
