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
}

/* Fin css CARD  */

/* Titre */
.borderColor{
    color: #e06717e4 !important;
}

/* Style pour les cartes */
.card {
  transform: scale(0.7); /* Réduit la taille à 70% */
  transform-origin: center center; /* Centre la position d'origine des cartes */
  flex: 1 0 30%; /* Ajuster la largeur pour afficher 3 cartes */
  box-sizing: border-box; /* S'assurer que padding et border sont inclus dans la largeur totale */
  margin: 0 -0px; /* Ajoute une marge égale de chaque côté pour séparer les cartes */
}

/* Conteneur de cartes responsif */
.carousel-inner .d-flex {
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom: 80px; /* Ajoutez une marge inférieure pour compenser la hauteur des boutons */
}

/* Ajoutez cette classe au conteneur parent du carrousel */
.carousel-container {
  position: relative; /* Positionnement relatif pour que les boutons soient positionnés par rapport à ce conteneur */
  padding: 20px; /* Ajoutez un peu de rembourrage pour éviter que les boutons ne soient collés aux bords */
}

/* Modifiez les boutons de navigation du carrousel */
.carousel-control-prev,
.carousel-control-next {
  position: absolute; /* Positionnement absolu pour déplacer les boutons */
  top: 50%; /* Alignez verticalement les boutons au centre */
  width: 40px; /* Ajoutez une largeur fixe */
  height: 40px; /* Ajoutez une hauteur fixe */
  margin-top: -20px; /* Réduisez la hauteur de moitié pour centrer verticalement */
  z-index: 1; /* Assurez-vous qu'ils sont au-dessus des cartes */
  background-color: #e06717e4; /* Ajoutez une couleur d'arrière-plan pour plus de visibilité */
  border-radius: 50%; /* Rendez les boutons circulaires */
}

/* Positionnez le bouton "Précédent" à gauche */
.carousel-control-prev {
  left: 20px; /* Déplacez-le légèrement vers l'intérieur */
}

/* Positionnez le bouton "Suivant" à droite */
.carousel-control-next {
  right: 20px; /* Déplacez-le légèrement vers l'intérieur */
}

</style>

</head>
<body class="w-100">
<?php include("header.php"); ?>

 <!-- TARIFS -->
<section id="star-container" class="text-center mt-4 ms-2 me-2">
  <div>
    <h4 class="mb-5 border borderColor border-5 rounded display-6 p-2 col m-2 text-white">
      <strong>Nos Tarifs</strong>
    </h4>
  </div>

  <div id="tarifCarousel" class="carousel slide carousel-container">
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
