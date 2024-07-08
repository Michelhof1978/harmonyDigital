<body class="w-100">
<?php
  // Constantes pour les URLs
  define('AUTHOR_URL', 'https://cvmichel-hoffmann.fr/');
  define('LINKEDIN_URL', 'https://www.linkedin.com/in/michel-h-245436203/');
  define('GITHUB_URL', 'https://github.com/Michelhof1978/');
?>

<div class="bg-dark w-100">
    <div class="container-fluid">
        <div class="navbar-brand"> 
            <a class="navbar-brand ms-2" href="index.php">
                <strong class="text-white nav-brand">
                    <span class="text-orange">H</span>armony <span class="text-orange">D</span>igital
                </strong>
                <span class="orange">.</span>
            </a>
        </div>
    </div>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div class="container-fluid">
    <!-- Bouton hamburger -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Menu collapsé -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Réalisations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Informations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formulaireDeContact.php">Contactez-nous !</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<header id="special-header" class="w-100">
    <video autoplay muted loop id="video-bg" playsinline>
        <source src="videos/header.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la vidéo.
    </video>
    <div id="logo-container">
        <img src="images/logo.png" alt="Logo" class="img-fluid">
    </div>
</header>
