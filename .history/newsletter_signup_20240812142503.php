<?php
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
            echo 'Merci pour votre inscription !';
        } else {
            echo 'Une erreur est survenue. Veuillez réessayer plus tard.';
        }
    } else {
        echo 'Adresse email invalide.';
    }
} else {
    echo 'Méthode de requête invalide.';
}
?>
