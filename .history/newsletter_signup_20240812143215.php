<?php
session_start(); // Démarrer la session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if ($email) {
        $to = 'harmonydigitalweb@gmail.com';
        $subject = 'Nouvel abonnement à la newsletter';
        $message = 'Un nouvel utilisateur s\'est abonné à la newsletter avec l\'email : ' . $email;
        $headers = 'From: no-reply@votresite.com' . "\r\n" .
                   'Reply-To: no-reply@votresite.com' . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        if (mail($to, $subject, $message, $headers)) {
            $_SESSION['newsletter_subscribed'] = true;
            header('Location: confirmation.php');
        } else {
            $_SESSION['newsletter_subscribed'] = false;
            header('Location: confirmation.php');
        }
    } else {
        $_SESSION['newsletter_subscribed'] = false;
        header('Location: confirmation.php');
    }
} else {
    echo 'Méthode de requête invalide.';
}
?>
