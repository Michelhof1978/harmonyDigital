<?php
session_start(); // Démarrer la session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['email'])) {
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

        if ($email) {
            $to = 'michelhoffmann@harmony-digital.fr';
            $subject = 'Nouvel abonnement à la newsletter';
            $message = 'Un nouvel utilisateur s\'est abonné à la newsletter avec l\'email : ' . $email;
            
            // Amélioration des en-têtes
            $headers = array(
                'From: Michel Hoffmann <michelhoffmann@harmony-digital.fr>',
                'Reply-To: michelhoffmann@harmony-digital.fr',
                'X-Mailer: PHP/' . phpversion(),
                'MIME-Version: 1.0',
                'Content-Type: text/plain; charset=UTF-8',
                'X-Priority: 3',
                'X-MSMail-Priority: Normal',
                'List-Unsubscribe: <mailto:unsubscribe@harmony-digital.fr?subject=Unsubscribe>',
                'Precedence: bulk',
                'Return-Path: michelhoffmann@harmony-digital.fr'
            );

            // Conversion des en-têtes en chaîne
            $headers = implode("\r\n", $headers);

            // Ajout d'un paramètre supplémentaire pour réduire les risques de spam
            $additional_parameters = '-f michelhoffmann@harmony-digital.fr';

            if (mail($to, $subject, $message, $headers, $additional_parameters)) {
                $_SESSION['newsletter_subscribed'] = true;
            } else {
                $_SESSION['newsletter_subscribed'] = false;
                // Enregistrement de l'erreur pour débogage
                error_log("Échec de l'envoi d'email à $to");
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
?>