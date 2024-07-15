<?php include("head.php"); ?>
<meta name="description" content="">
<title>Harmony Digital</title>

<style>
/* CARDS */
  /* css CARD ajouté ds le head car non opérationnel sur le fichier css */
   /* Animation clignotante */
   @keyframes blink {
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: 0;
    }
}

/* ANIMATION TARIF CLIGNOTANT CARD */
.custom-animation {
    animation: infiniteBlink 3s infinite; /* 2s est la durée de l'animation, et "infinite" indique une répétition infinie */
}

.textcard {
    margin-top: -80px;
}

.imgcard {
    margin-top: -40px;
}

/* Style pour les cartes */
/* Réduire la taille des cartes à 70% */
/* Rapprocher les cartes en réduisant la marge */
/* Rapprocher les cartes en utilisant des marges négatives */
.card {
    transform: scale(0.7);
    transform-origin: center center;
    flex: 1 0 30%;
    box-sizing: border-box;
    margin: 0 -90px;
}

/* CAROUSSEL */
/* Réinitialiser les marges pour les éléments de la première et de la dernière ligne */
.carousel-inner .d-flex > .card:first-child,
.carousel-inner .d-flex > .card:last-child {
    margin-left: 30px;
    margin-right: 30px;
}


/* Conteneur de cartes responsif */
    .carousel-inner .d-flex {
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom: 80px; /* Ajoutez une marge inférieure pour compenser la hauteur des boutons */
}

/*classe au conteneur parent du carrousel */
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
  margin-top: -70px; /* Réduisez la hauteur de moitié pour centrer verticalement */
  background-color: #e06717e4; /* Ajoutez une couleur d'arrière-plan pour plus de visibilité */
  border-radius: 50%; /* Rendez les boutons circulaires */

}


/* Positionnez le bouton "Précédent" à gauche */
.carousel-control-prev {
  left: 40%; /* Déplacez-le vers le centre */
  transform: translateX(40%); /* Déplacez-le vers la gauche de moitié de sa largeur pour le centrer horizontalement */

}

/* Positionnez le bouton "Suivant" à droite */
.carousel-control-next {
  right: 40%; /* Déplacez-le vers le centre */
  transform: translateX(-50%); /* Déplacez-le vers la droite de moitié de sa largeur pour le centrer horizontalement */
}


/* Positionnez le bouton "Précédent" à gauche */
.carousel-control-prev {
  left: 0;

}

/* Positionnez le bouton "Suivant" à droite */
.carousel-control-next {
  right: 0;
}
/* FIN CAROUSSEL */

</style>

</head>
<body>
<?php include("header.php"); ?>

<script>
        var body = document.body;
        function blink() {
            var randomBinary = Math.round(Math.random());
            body.style.backgroundColor = randomBinary ? 'black' : 'white';
            body.style.color = randomBinary ? 'lime' : 'black';
            body.innerText = randomBinary;
            setTimeout(blink, 500);
        }
        blink();
    </script>
<?php include("footer.php"); ?>

