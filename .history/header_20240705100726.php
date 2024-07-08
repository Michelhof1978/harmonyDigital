<body>
<?php
  // Constantes pour les URLs
  define('AUTHOR_URL', 'https://cvmichel-hoffmann.fr/');
  define('LINKEDIN_URL', 'https://www.linkedin.com/in/michel-h-245436203/');
  define('GITHUB_URL', 'https://github.com/Michelhof1978/');
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand fs-2 mb-2 mt-2 text-center" href="index.php">
            <strong class="text-white text-logo">
                <span class="text-orange">H</span>armony <span class="text-orange">D</span>igital
            </strong>
            <span class="orange">.</span>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="images/hamburger.png" loading="lazy" alt="Hamburger navbar" class="me-2" style="height: 30px;">
            <span class="align-middle">Menu</span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <!-- Vos éléments de menu ici -->
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