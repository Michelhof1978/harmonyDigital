<?php
session_start(); // Démarrer la session

// Inclure PHPMailer (chemin vers les fichiers de PHPMailer téléchargés)
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['email'])) {
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

        if ($email) {
            $mail = new PHPMailer(true);

            try {
                // Configuration du serveur SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.votreserveur.com'; // Remplacez par l'hôte SMTP de votre serveur
                $mail->SMTPAuth = true;
                $mail->Username = 'michelhoffmann@harmony-digital.fr'; // Remplacez par votre adresse email
                $mail->Password = 'votremotdepasse'; // Remplacez par votre mot de passe
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                // Définir les destinataires
                $mail->setFrom('michelhoffmann@harmony-digital.fr', 'Michel Hoffmann');
                $mail->addAddress('harmonydigitalweb@gmail.com'); // Remplacez par l'adresse email de réception

                // Contenu de l'email
                $mail->isHTML(false); // Envoyer en format texte brut
                $mail->Subject = 'Nouvel abonnement à la newsletter';
                $mail->Body    = 'Un nouvel utilisateur s\'est abonné à la newsletter avec l\'email : ' . $email;

                // Envoyer l'email
                $mail->send();
                $_SESSION['newsletter_subscribed'] = true; // Succès
            } catch (Exception $e) {
                $_SESSION['newsletter_subscribed'] = false;
                error_log("Erreur lors de l'envoi de l'email : {$mail->ErrorInfo}");
            }
        } else {
            $_SESSION['newsletter_subscribed'] = false; // Email invalide
        }
    } else {
        $_SESSION['newsletter_subscribed'] = false; // Email vide
    }
    header('Location: confirmationNewsLetter.php');
    exit(); // Terminer l'exécution après redirection
} else {
    echo 'Méthode de requête invalide.';
}
