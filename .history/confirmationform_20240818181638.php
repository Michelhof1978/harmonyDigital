<?php
session_start(); // Démarrer la session

// Vérifier si le message a été envoyé
if (isset($_SESSION['message_sent']) && $_SESSION['message_sent'] === true):
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Confirmation message - Harmony Digital">
    <title>Confirmation message - Harmony Digital</title>
    <style>
        .text-light-success {
            color: #7dff33; /* Un vert plus clair */
        }
    </style>
</head>
<body>
    <section class="confirmation mb-5">
        <h4 class="m-5 text-center border border-3 text-white p-2 display-6 borderColor" id="contact"><strong>MESSAGE ENVOYE</strong></h4>
        <div class="text-center">
            <div class="fw-bold lead fs-2 text-light-success text-center p-4 pb-5 ms-1 me-1 mb-5">
                <p>
                    Nous avons bien reçu votre message et nous vous confirmons que votre demande est en cours de traitement.
                </p>
                <img src="images/robotSeparateur.png" alt="robot" loading="lazy" class="img-fluid w-25 mt-3">
            </div>
        </div>
    </section>

    <?php 
    // Supprimer la variable de session après l'affichage
    unset($_SESSION['message_sent']); 
    ?>
</body>
</html>

<?php 
// Fin de la condition de vérification du message
endif; 
?>
