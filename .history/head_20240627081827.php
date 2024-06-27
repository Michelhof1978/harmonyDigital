<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../images/logo.png">
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Changa:wght@200..800&family=Jacquard+12&family=Orbitron:wght@400..900&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Special+Elite&display=swap" rel="stylesheet">
  
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Noticia+Text:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<link rel="icon" type="image/x-icon" href="../images/logo.ico">
  <meta property="og:title" content="Harmony Digital">
  <meta property="og:description" content="
                                            Conception de Sites Internet,
                                            Réalisation Maquettes et Logos,
                                            Référencement SEO,
                                            Marketing Digital,
                                            Communication En Événementielle,
                                            Réalisation Campagne Publicitaire.
                                            Entreprise Nationale">
  <meta property="og:image" content="../images/logo.ico">

  <style>
        /* Ajoutez ici vos styles CSS */
        body {
            margin: 0;
            font-family: 'Times New Roman', Times, serif;
            overflow: hidden; /* Masquer le dépassement de contenu */
            background-image: url('Images/body.png'); /* Remplacez par le chemin correct de votre image */
            background-size: cover; /* Ajuste la taille de l'image pour couvrir tout le body */
            background-position: center; /* Centre l'image horizontalement et verticalement */
            background-repeat: no-repeat; /* Empêche la répétition de l'image */
        }

        /* navbar */
        .navbar {
            height: 100px;
        }

        .orange {
            color: #e06717e4;
            font-size: 85px;
        }

        .text-orange {
            color: #e06717e4;
            font-size: 55px;
        }

        .text-orange-nav {
            color: #e06717e4;
            font-size: 20px;
        }

        .text-logo {
            font-family: "Special Elite", system-ui;
            font-weight: 400;
            font-style: normal;
        }

        .nav-item a {
            color: rgb(250, 250, 250);
        }

        .nav-item a:hover {
            color: rgba(8, 244, 220, 0.499);
        }

        .nav-item {
            min-width: 12vw;
        }

        .nav-spacing {
            margin-left: 5px; /* Ajustez cette valeur selon vos besoins */
            margin-right: 5px; /* Ajustez cette valeur selon vos besoins */
        }

        .navbar-nav {
            font-family: "Noticia Text", serif;
            font-weight: 700;
            font-style: normal;
        }

        /* header */
        #special-header {
            position: relative;
            height: 70vh;
            overflow: hidden;
        }

        #video-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        #logo-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
        }

        #logo-container img {
            max-width: 280px;
            max-height: auto;
        }

        /* star-container */
        #star-container {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #7ed2f1c4;
        }

        .star-line {
            display: flex;
            justify-content: center;
            align-items: center;
            white-space: nowrap;
            height: 0.5em;
            width: 100%;
            margin-bottom: 20px;
        }

        .star {
            opacity: 0;
            animation: sparkle 1s infinite alternate;
            font-size: 8px;
        }

        @keyframes sparkle {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        /* Media queries pour les appareils mobiles */
        @media (max-width: 768px) {
            .navbar {
                height: auto;
            }

            .navbar-brand {
                font-size: 1.5rem;
            }

            .text-orange {
                font-size: 1.5rem;
            }

            .text-orange-nav {
                font-size: 1rem;
            }

            .nav-item {
                min-width: auto;
                text-align: center;
            }

            .nav-spacing {
                margin-left: 0;
                margin-right: 0;
            }

            .navbar-nav {
                text-align: center;
            }

            #special-header {
                height: 50vh; /* Réduire la hauteur du header sur les appareils mobiles */
            }

            #logo-container img {
                max-width: 200px; /* Réduire la taille du logo sur les appareils mobiles */
            }

            .star-line {
                height: 0.4em; /* Réduire la hauteur des lignes de caractères */
                margin-bottom: 20px; /* Réduire l'espacement entre les lignes */
            }

            .star {
                font-size: 10px; /* Réduire la taille des caractères sur les appareils mobiles */
            }
        }

        /* footer */
        footer {
            height: 360px;
        }

        .copyright {
            text-align: center;
            color: #fff;
            font-size: 15px;
        }

        .img1 {
            width: 330px;
            height: 650px;
            margin-top: 50px;
            margin-left: 50px;
        }

        .img2 {
            height: 180px;
            width: 205px;
            text-align: center;
        }

        .img3 {
            text-align: center;
        }
    </style>