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
        flex: 1 0 30%; /* Ajuster la largeur pour afficher 3 cartes */
        box-sizing: border-box; /* S'assurer que padding et border sont inclus dans la largeur totale */
        margin: 10px; /* Espace autour de chaque carte */
    }

    /* Conteneur de cartes responsif */
    .carousel-inner .d-flex {
        flex-wrap: wrap;
        justify-content: center;
    }

    /* Positionner les boutons du carrousel en dehors des cartes */
#tarifCarousel {
  position: relative; /* Assure que les contrôles sont positionnés relativement au conteneur du carrousel */
}

/* Bouton précédent */
.carousel-control-prev {
  left: -50px; /* Ajustez cette valeur pour positionner le bouton sur le côté gauche */
  z-index: 2; /* Assure que le bouton est au-dessus des cartes */
  background-color: rgba(0, 0, 0, 0.5); /* Ajoutez une couleur de fond semi-transparente pour le bouton */
  border-radius: 50%; /* Forme du bouton circulaire */
  width: 50px; /* Largeur du bouton */
  height: 50px; /* Hauteur du bouton */
}

/* Icône du bouton précédent */
.carousel-control-prev-icon {
  background-image: url('data:image/svg+xml;charset=utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16"><path d="M11.293 12.293a1 1 0 0 0 0-1.414L7.414 7.5 11.293 3.707a1 1 0 0 0-1.414-1.414L5.5 6.586a1 1 0 0 0 0 1.414l4.379 4.379a1 1 0 0 0 1.414 0z"/></svg>');
}

/* Bouton suivant */
.carousel-control-next {
  right: -50px; /* Ajustez cette valeur pour positionner le bouton sur le côté droit */
  z-index: 2; /* Assure que le bouton est au-dessus des cartes */
  background-color: rgba(0, 0, 0, 0.5); /* Ajoutez une couleur de fond semi-transparente pour le bouton */
  border-radius: 50%; /* Forme du bouton circulaire */
  width: 50px; /* Largeur du bouton */
  height: 50px; /* Hauteur du bouton */
}

/* Icône du bouton suivant */
.carousel-control-next-icon {
  background-image: url('data:image/svg+xml;charset=utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path d="M4.707 3.707a1 1 0 0 1 1.414 0L9.5 6.586a1 1 0 0 1 0 1.414L6.121 12.707a1 1 0 1 1-1.414-1.414L7.586 8.5 4.707 5.207a1 1 0 0 1 0-1.414z"/></svg>');
}

/* Optionnel : Boutons plus grands sur mobile */
@media (max-width: 768px) {
  .carousel-control-prev, .carousel-control-next {
    width: 40px; /* Réduit la largeur des boutons sur mobile */
    height: 40px; /* Réduit la hauteur des boutons sur mobile */
  }
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
