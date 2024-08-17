<body>
<?php
  // Constantes pour les URLs
 
?>

<header>
<div class="navbar-brand">
    <div class="container-fluid">
        <!-- Logo uniquement -->
        <a class="navbar-brand ms-2" href="index.php">
            <img src="images/enseigneNom.png" alt="Logo" class="logo-img img-fluid w-25">
        </a>
    </div>
</div>




<nav class="navbar navbar-expand-md bg-dark">  
    <div class="container-fluid">
        <!-- Bouton hamburger -->
        <button class="navbar-toggler custom-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu collapsé -->
        <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto text-center me-3">
                <li class="nav-item">
                    <a class="nav-link fs-5" aria-current="page" href="index.php"><strong>Accueil</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="infos.php"><strong>Informations</strong></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fs-5" href="tarifs.php"><strong>Tarifs</strong></a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link fs-5" href="formulaireDeContact.php"><strong>Contactez-nous !</strong></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>

<div id="special-header">
    <video autoplay muted loop id="video-bg" playsinline>
        <source src="videos/header.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la vidéo.
    </video>
    <div id="logo-container">
        <img src="images/logo.png" alt="Logo" class="img-fluid">
    </div>
</div>
</header>