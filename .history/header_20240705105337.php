<body>
<?php
  // Constantes pour les URLs
  define('AUTHOR_URL', 'https://cvmichel-hoffmann.fr/');
  define('LINKEDIN_URL', 'https://www.linkedin.com/in/michel-h-245436203/');
  define('GITHUB_URL', 'https://github.com/Michelhof1978/');
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Logo et titre -->
        <a class="navbar-brand fs-2 mb-2 mt-2 text-center" href="index.php">
            <strong class="text-white text-logo">
                <span class="text-orange">H</span>armony <span class="text-orange">D</span>igital
            </strong>
            <span class="orange">.</span>
        </a>

        <!-- Bouton hamburger -->
        <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="images/hamburger.png" loading="lazy" alt="Hamburger navbar" class="hamburger-icon">
        </button>

        <!-- Menu collapsé -->
        <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto text-center">
                <li class="nav-item">
                    <a class="nav-link fs-5" aria-current="page" href="index.php"><strong><span class="text-orange-nav">A</span>ccueil</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="#"><strong><span class="text-orange-nav">R</span>éalisations</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="#"><strong><span class="text-orange-nav">I</span>nformations</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="formulaireDeContact.php"><strong><span class="text-orange-nav">C</span>ontactez-nous !</strong></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header id="special-header">
    <video autoplay muted loop id="video-bg" playsinline>
        <source src="videos/header.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la vidéo.
    </video>
    <div id="logo-container">
        <img src="images/logo.png" alt="Logo" class="img-fluid">
    </div>
</header>


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
    color: rgba(85, 211, 243, 0.777);
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
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .navbar-brand {
        margin-bottom: 1rem;
    }

    .navbar-toggler {
        margin-bottom: 1rem;
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
    flex-direction: column;
    align-items: center;
    }
    
    #special-header {
    height: 20vh; /* Réduire la hauteur du header sur les appareils mobiles */
    }
    
    #logo-container img {
    max-width: 200px; /* Réduire la taille du logo sur les appareils mobiles */
    }
    
    .star-line {
    height: 0.4em; /* Réduire la hauteur des lignes de caractères /
    margin-bottom: 20px; / Réduire l'espacement entre les lignes */
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