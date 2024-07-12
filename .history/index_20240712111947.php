<?php include("head.php"); ?>
<meta name="description" content="">
<title>Harmony Digital</title>
<style>
  /* css CARD ajouté ds le head car non opérationnel sur le fichier css */
    @keyframes infiniteBlink {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
    }

    /* Animation tarif clignotant */
    .custom-animation {
        animation: infiniteBlink 3s infinite; /* 2s est la durée de l'animation, et "infinite" indique une répétition infinie */
    }

    .textcard{
    margin-top: -80px;
  }

  .imgcard{
    margin-top: -40px;
    height: 200px; /* Ajoute une hauteur fixe pour les images */
  }

   /* Fin css CARD  */

    /* Titre */
    .borderColor{
      color: #e06717e4 !important;
    }

    /* Style pour le carrousel */
  .carousel-item {
    display: flex;
    justify-content: center;
  }

  .carousel-item .card {
    margin: 0 10px; /* Espace entre les cartes */
  }

  /* Style pour les cartes */
  .card {
    flex: 1 0 20%; /* Réduit la largeur des cartes à 20% */
  }

</style>

</head>
<body>
<?php include("header.php"); ?>

 <!-- TARIFS -->
<section id="star-container" class="text-center mt-4 ms-2 me-2">
  <div>
    <h4 class="mb-5 border borderColor border-5 rounded display-6 p-2 col m-2 text-white">
      <strong>Nos Tarifs</strong>
    </h4>
  </div>

  <div id="tarifCarousel" class="carousel slide">
    <div class="carousel-inner">
      <!-- Premier groupe de cartes -->
      <div class="carousel-item active">
        <div class="d-flex justify-content-center">
          <div class="card bg-dark">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="images/card1.png" alt="site internet" loading="lazy" class="imgcard img-fluid">
              <p class="textcard card-text text-white">
                <strong><span class="text-orange-nav">S</span>ites <span class="text-orange-nav">V</span>itrines</strong><br>
                <strong><span class="text-orange-nav">C</span>orporate</strong><br>
                <strong><span class="text-orange-nav">E</span>vènementiel</strong><br>
                <strong><span class="text-orange-nav">E</span>-<span class="text-orange-nav">C</span>ommerce</strong><br>
              </p>
            </div>
            <strong class="pricecard text-white custom-animation mt-3">A partir de 890,00 €</strong>
            <div class="card-body">
              <a href=".php" class="border border-3 border-white btn text-white">Plus d'infos !</a>
            </div>
          </div>
          <div class="card bg-dark">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="images/card1.png" alt="site internet" loading="lazy" class="imgcard img-fluid">
              <p class="textcard card-text text-white">
                <strong><span class="text-orange-nav">S</span>ites <span class="text-orange-nav">V</span>itrines</strong><br>
                <strong><span class="text-orange-nav">C</span>orporate</strong><br>
                <strong><span class="text-orange-nav">E</span>vènementiel</strong><br>
                <strong><span class="text-orange-nav">E</span>-<span class="text-orange-nav">C</span>ommerce</strong><br>
              </p>
            </div>
            <strong class="pricecard text-white custom-animation mt-3">A partir de 890,00 €</strong>
            <div class="card-body">
              <a href=".php" class="border border-3 border-white btn text-white">Plus d'infos !</a>
            </div>
          </div>
          <div class="card bg-dark">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="images/card1.png" alt="site internet" loading="lazy" class="imgcard img-fluid">
              <p class="textcard card-text text-white">
                <strong><span class="text-orange-nav">S</span>ites <span class="text-orange-nav">V</span>itrines</strong><br>
                <strong><span class="text-orange-nav">C</span>orporate</strong><br>
                <strong><span class="text-orange-nav">E</span>vènementiel</strong><br>
                <strong><span class="text-orange-nav">E</span>-<span class="text-orange-nav">C</span>ommerce</strong><br>
              </p>
            </div>
            <strong class="pricecard text-white custom-animation mt-3">A partir de 890,00 €</strong>
            <div class="card-body">
              <a href=".php" class="border border-3 border-white btn text-white">Plus d'infos !</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Deuxième groupe de cartes -->
      <div class="carousel-item">
        <div class="d-flex justify-content-center">
          <div class="card bg-dark">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="images/card1.png" alt="site internet" loading="lazy" class="imgcard img-fluid">
              <p class="textcard card-text text-white">
                <strong><span class="text-orange-nav">S</span>ites <span class="text-orange-nav">V</span>itrines</strong><br>
                <strong><span class="text-orange-nav">C</span>orporate</strong><br>
                <strong><span class="text-orange-nav">E</span>vènementiel</strong><br>
                <strong><span class="text-orange-nav">E</span>-<span class="text-orange-nav">C</span>ommerce</strong><br>
              </p>
            </div>
            <strong class="pricecard text-white custom-animation mt-3">A partir de 890,00 €</strong>
            <div class="card-body">
              <a href=".php" class="border border-3 border-white btn text-white">Plus d'infos !</a>
            </div>
          </div>
          <div class="card bg-dark">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="images/card1.png" alt="site internet" loading="lazy" class="imgcard img-fluid">
              <p class="textcard card-text text-white">
                <strong><span class="text-orange-nav">S</span>ites <span class="text-orange-nav">V</span>itrines</strong><br>
                <strong><span class="text-orange-nav">C</span>orporate</strong><br>
                <strong><span class="text-orange-nav">E</span>vènementiel</strong><br>
                <strong><span class="text-orange-nav">E</span>-<span class="text-orange-nav">C</span>ommerce</strong><br>
              </p>
            </div>
            <strong class="pricecard text-white custom-animation mt-3">A partir de 890,00 €</strong>
            <div class="card-body">
              <a href=".php" class="border border-3 border-white btn text-white">Plus d'infos !</a>
            </div>
          </div>
          <div class="card bg-dark">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="images/card1.png" alt="site internet" loading="lazy" class="imgcard img-fluid">
              <p class="textcard card-text text-white">
                <strong><span class="text-orange-nav">S</span>ites <span class="text-orange-nav">V</span>itrines</strong><br>
                <strong><span class="text-orange-nav">C</span>orporate</strong><br>
                <strong><span class="text-orange-nav">E</span>vènementiel</strong><br>
                <strong><span class="text-orange-nav">E</span>-<span class="text-orange-nav">C</span>ommerce</strong><br>
              </p>
            </div>
            <strong class="pricecard text-white custom-animation mt-3">A partir de 890,00 €</strong>
            <div class="card-body">
              <a href=".php" class="border border-3 border-white btn text-white">Plus d'infos !</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Ajoutez d'autres items de carrousel ici si nécessaire -->
    </div>

    <!-- Contrôles du carrousel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#tarifCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#tarifCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<?php include("footer.php"); ?>
