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
        <a class="navbar-brand" href="index.php">
            <strong class="text-white text-logo">
                <span class="text-orange">H</span>armony <span class="text-orange">D</span>igital
            </strong>
            <span class="orange">.</span>
        </a>

        <!-- Bouton hamburger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="images/hamburger.png" loading="lazy" alt="Hamburger navbar" class="hamburger-icon">
        </button>

        <!-- Menu collapsé -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- ... le reste de votre menu ... -->
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