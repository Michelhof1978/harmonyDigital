<body>
<?php
  // Constantes pour les URLs
  define('AUTHOR_URL', 'https://cvmichel-hoffmann.fr/');
  define('LINKEDIN_URL', 'https://www.linkedin.com/in/michel-h-245436203/');
  define('GITHUB_URL', 'https://github.com/Michelhof1978/');
?>
  
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand fs-2" href="#">
        <strong class="text-white text-logo">
          <span class="text-orange">H</span>armony <span class="text-orange">D</span>igital
        </strong>
        <span class="orange">.</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav" id="menu">
          <li class="nav-item">
            <a class="nav-link fs-5" href="index.php"><strong><span class="text-orange-nav">A</span>ccueil</strong></a>
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
    <video autoplay muted loop id="video-bg">
      <source src="videos/header.mp4" type="video/mp4">
      Votre navigateur ne supporte pas la vidéo.
    </video>
    <div id="logo-container">
      <img src="images/logo.png" alt="Logo">
    </div>
  </header>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2IB-SWp1mueNAhU8ChvnYKykqia/FSw6n1kaifERipmHDz4bB2DhXumNCeN" crossorigin="anonymous"></script>