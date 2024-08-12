<?php include("head.php") ?>
<meta name="description" content="Confirmation message - Harmony Digital">
<title>Confirmation message - Harmony Digital</title>
</head>

<?php include("header.php") ?>

<div id="binary-background"></div>

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


<?php include("footer.php") ?>

</body>
</html>
