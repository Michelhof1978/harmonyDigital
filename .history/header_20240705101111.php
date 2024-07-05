<body>
<?php
  // Constantes pour les URLs
  define('AUTHOR_URL', 'https://cvmichel-hoffmann.fr/');
  define('LINKEDIN_URL', 'https://www.linkedin.com/in/michel-h-245436203/');
  define('GITHUB_URL', 'https://github.com/Michelhof1978/');
?>

body {
    margin: 0;
    font-family: 'Times New Roman', Times, serif;
    overflow-x: hidden;
    background-image: url('Images/body.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

/* navbar */
.navbar {
    min-height: 60px;
}

.orange {
    color: #e06717e4;
    font-size: 3rem;
}

.text-orange {
    color: #e06717e4;
    font-size: 2rem;
}

.text-orange-nav {
    color: #e06717e4;
    font-size: 1.2rem;
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
    padding: 0.5rem 0;
}

.navbar-nav {
    font-family: "Noticia Text", serif;
    font-weight: 700;
    font-style: normal;
}



/* header */
#special-header {
    position: relative;
    height: 50vh;
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
    max-width: 100%;
    height: auto;
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
    0% { opacity: 0; }
    100% { opacity: 1; }
}

/* footer */
footer {
    min-height: 360px;
}

.copyright {
    text-align: center;
    color: #fff;
    font-size: 15px;
}

.img1, .img2, .img3 {
    max-width: 100%;
    height: auto;
}

/* Media queries pour les appareils mobiles */
@media (max-width: 768px) {
    .navbar-brand {
        font-size: 1.5rem;
    }

    .orange {
        font-size: 2rem;
    }

    .text-orange {
        font-size: 1.5rem;
    }

    .text-orange-nav {
        font-size: 1rem;
    }

    #special-header {
        height: 30vh;
    }

    #logo-container img {
        max-width: 80%;
    }

    .star-line {
        height: 0.4em;
        margin-bottom: 10px;
    }

    .star {
        font-size: 6px;
    }

    .img1 {
        margin: 20px auto;
        display: block;
    }

    .img2, .img3 {
        margin: 10px auto;
        display: block;
    }
}

<header id="special-header">
    <video autoplay muted loop id="video-bg" playsinline>
        <source src="videos/header.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la vidéo.
    </video>
    <div id="logo-container">
        <img src="images/logo.png" alt="Logo" class="img-fluid">
    </div>
</header>