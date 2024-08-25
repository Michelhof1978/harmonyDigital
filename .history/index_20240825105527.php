 <?php include("head.php"); ?>
    <meta name="description" content="Nous sommes votre partenaire de confiance pour la création de sites web professionnels. Notre équipe vous aide à concevoir des sites web attrayants et fonctionnels qui répondent à vos besoins spécifiques et optimisent votre présence en ligne.">
    <title>Conception de Sites Web de Qualité | Création Professionnelle & Optimisation SEO</title>
   
    <meta property="og:url" content="https://harmony-digital.fr/accueil">
    <!-- Canonical Link -->
    <link rel="canonical" href="https://harmony-digital.fr/accueil">

   <style>  
/* Fond 0 et 1 index */
#currency-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    overflow: hidden;
}

.currency-particle {
    position: absolute;
    color: lime;
    font-family: 'Courier New', Courier, monospace;
    font-size: 10px;
    white-space: nowrap;
    animation: move 5s linear infinite;
    opacity: 0.8;
}

@keyframes move {
    from {
        transform: translateY(-100%);
    }
    to {
        transform: translateY(100%);
    }
}

h4 {
    color: #FFFF66; /* Jaune néon très clair */
}

/* Compte à rebours */
@import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');

.countdown-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 1rem; /* Réduit l'espace en bas sur mobile */
}

#countdown {
    font-size: 2em;
    color: #0f0;
    text-shadow: 0 0 10px #0f0; /* Effet de lueur pour un look plus géométrique */
    font-family: 'Orbitron', sans-serif; /* Police moderne et géométrique */
    letter-spacing: 0.1em; /* Espacement entre les chiffres pour un effet plus aéré */
    text-transform: uppercase; 
    white-space: nowrap; /* Pour éviter les retours à la ligne */
    text-align: center; 
}

/* Styles pour les différentes parties du temps */
#countdown .time-part {
    display: inline-block;
    width: 2em; 
    text-align: center;
}
/* Robot droite compétence */
.small-robot {
        position: absolute;
        right: 0;
        top: 0;
        height: 200px; 
        object-fit: contain;
      margin-right: -50px;
        margin-top: 1000px;
    }
/* Médias Queries pour les écrans plus petits */
@media (max-width: 768px) {
    #countdown {
        font-size: 1.5em; /* Réduit la taille de la police sur les écrans plus petits */
    }

    #countdown .time-part {
        width: 1.5em; /* Réduit la largeur des parties du temps */
    }
}

@media (max-width: 480px) {
    #countdown {
        font-size: 1.2em; /* Réduit encore la taille de la police pour les très petits écrans */
    }

    #countdown .time-part {
        width: 1.8em; /* Réduit encore la largeur des parties du temps */
    }
}

.competence {
    background-image: url('images/fondBleu.webp');
}

 /* Style par défaut pour les écrans plus grands */
 .competence p {
        font-size: 1.25rem; /* fs-4 correspond à 1.25rem */
    }

    /* Style pour les écrans de moins de 768px (mobile) */
    @media (max-width: 767.98px) {
        .competence p {
            font-size: 1rem; /* Ajustez la taille du texte pour mobile */
        }
    }
/* CARDS DESKTOP*/
.card {
    transform: scale(0.7);
    transform-origin: center center;
    flex: 1 0 30%;
    box-sizing: border-box;
    margin: 0 -90px;
    background-image: url('images/fondBleu.webp');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.carousel-inner .d-flex > .card:first-child,
.carousel-inner .d-flex > .card:last-child {
    margin-left: 30px;
    margin-right: 30px;
}

.carousel-inner .d-flex {
    flex-wrap: wrap;
    justify-content: center;
    margin-bottom: 80px;
}

.carousel-container {
    position: relative;
    padding: 20px;
    margin-top: -70px;
}

.carousel-control-prev,
.carousel-control-next {
    position: absolute;
    top: 50%;
    width: 40px;
    height: 40px;
    margin-top: -70px;
    background-color: #e06717e4;
    border-radius: 50%;
}

.carousel-control-prev {
    left: 0;
}

.carousel-control-next {
    right: 0;
}

/* Animation clignotante tarif */
.custom-animation {
    animation: infiniteBlink 2s infinite; /* 2s est la durée de l'animation, et "infinite" indique une répétition infinie */
}

@keyframes infiniteBlink {
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: 0;
    }
}
/* Fin Animation clignotante tarif */

.pricecard {
    font-size: 25px !important;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    margin-top: -100px;
}

.info {
    font-size: 30px !important;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    border: 5px solid #e06717e4; 
}
/* FIN CARDS DESKTOP*/

.text-decoration-custom:hover .text-orange-nav2 {
    color: white; /* Change la couleur du texte en blanc au survol */
}

/* Domaine de compétence */
.textIntro {
	margin-top: 40px;
    background-image: url('images/fondBleu.webp');
  background-size: cover;
    background-position: center;
   background-repeat: no-repeat;
}

.robotIndex {
	position: fixed;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    width: 20%; 

}

.neon-yellow {
    color: rgba(255, 255, 51, 0.8); /* Code couleur pour un jaune néon plus clair et plus transparent */
    text-shadow: 0 0 5px rgba(255, 255, 51, 0.5), 
                 0 0 10px rgba(255, 255, 51, 0.5), 
                 0 0 20px rgba(255, 255, 51, 0.5);
    box-shadow: 0 0 10px rgba(255, 255, 51, 0.5), 
                0 0 20px rgba(255, 255, 51, 0.3), 
                0 0 30px rgba(255, 255, 51, 0.2);
    border-radius: 10px; /* Légèrement arrondir les bords */
    padding: 10px; 
    display: inline-block; /* Nécessaire pour que le box-shadow soit visible */
}


.neon-section {
  border-radius: 5px;
}

.robotDomaine {
    max-width: 50%; 
  height: 150px; /* Conserve le ratio de l'image */
  display: block;
  margin: 0 auto; /* Centre l'image */
  margin-top: 20px;
}
.robotSeparateur {
    max-width: 50%; 
  height: 100px; /* Conserve le ratio de l'image */
  display: block;
  margin: 0 auto; /* Centre l'image */

}
.h2competence {
  margin-top: -70px;
}
 /* Fin domaine de compétence*/

  /*Intro*/
.offre {
    margin-left: 100px;  
 } 

 .intro {
    margin-right: 60px;
    margin-top: 30px;
    background-image: url('images/fondBleu.webp');
  background-size: cover;
    background-position: center;
   background-repeat: no-repeat;
   border-radius: 5px;

 } 
 /*Fin Intro*/
  /*Intro2*/
 .robotDomaine2 {
    max-width: 25%; 
    height: auto; /* Conserve le ratio de l'image */
    position: absolute; /* Positionnement absolu */
    left: 0; /* Aligne l'image complètement à gauche */
    top: 40px; /* Décale l'image vers le bas depuis le haut du conteneur */
    margin-top: 300px;
}

.intro2 {
    margin-left: 30%; 
    padding-left: 20px; 
}

/*fin Intro2*/
/*Section VIDEOCOM*/
.text-orange-video {
  color: #e06717e4;
  font-size: 25px;
  font-weight: 700;
}

.videoCom {
  padding: 15px;
  border: 1px solid #ddd;
  background: #FFF;
  background: linear-gradient(#FFF, #FFF 20%, #EEE 80%, #DDD);
  border-radius: 2px;
  box-shadow: 0 0 3px rgba(0,0,0, 0.2);
  margin-bottom: 20px;
}

.embed-responsive iframe {
  width: 100%;
  height: 315px;
}

@media (max-width: 767px) {
  .row > div:first-child {
    margin-bottom: 20px;
  }
}
/*Fin Section VIDEOCOM*/

  /* Effet survol logo */
.imgcard2 {
    transition: transform 0.5s ease;
}

/* Animation lors du survol */
.imgcard2:hover {
    transform: rotateY(360deg);
}

.card2 {
    transform: scale(0.7);
    transform-origin: center center;
    flex: 1 0 30%;
    box-sizing: border-box;
    margin: 0 -90px;
    background-image: url('images/fondNoir2.webp');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}


.img-small {
    max-width: 50px; 
    height: auto; /* Maintient les proportions de l'image */
}


/* Video robot ordi*/
.video-container {
        width: 100%;
        max-width: 100%;
        padding: 0 15px;
    }
    .video-container video {
        width: 100%;
        height: auto;
    }
    @media (min-width: 768px) {
        .fs-md-2 {
            font-size: 2rem !important;
        }
        .video-container {
            width: 50%;
            max-width: 800px;
        }
    }

    </style>
</head>

    <?php include("header.php"); ?>
    <div id="currency-background"></div>
    

    <div class="container-fluid d-flex justify-content-center align-items-center full-height mt-5 d-none d-md-flex">
    <img src="images/banniererobotindex.webp" alt="Bannière de bienvenue avec un robot" class="img-fluid w-50 rounded">
</div>

<div class="container-fluid d-flex justify-content-center align-items-center full-height mt-5 d-md-none">
    <img src="images/banniererobotindex.webp" alt="Bannière de bienvenue avec un robot" class="img-fluid w-100 rounded">
</div>

 <!-- INTRO-->
 <h1 class="mt-5 border borderColor border-4 rounded p-2 col m-4 text-center text-white fw-bold">
    Création de Sites Web Professionnels - Votre Partenaire de Confiance
</h1>


<div class="mt-5 container mb-5">
    <div class="row align-items-center justify-content-center text-center">
        <div class="col-12 col-md-6 mt-3 order-2 order-md-1">
            <p class="text-white lead fs-5 fw-bold press-start-2p-regular">Fin de la promo dans </p>
           
            <div class="countdown-container mb-3">
                <div id="countdown"></div>
            </div>
            <img src="images/offre2024.webp" alt="promotion de -10% pour les 50 prochains clients, offre valable jusqu'à la fin de l'année" loading="lazy" class="img-fluid w-50 w-md-75 mx-auto">
        </div>
        <div class="col-12 col-md-6 mt-4 text-white order-3 order-md-2">
            <div class="d-flex justify-content-center">
                <p class="fs-4 lead p-3 mx-auto fw-bold">
                    Nous pouvons réaliser tous vos projets à distance en effectuant des points réguliers via le réseau 
                    <a href="https://discord.com" class="text-decoration-custom" target="_blank" rel="noopener noreferrer">
                        <span class="text-orange-nav2">Discord</span>
                    </a>
                </p>
            </div>
            <div class="ms-3 me-3 pt-5 pb-5 lead fs-4 text-white rounded rounded-2 competence">
                <p class="fw-bold">
                    Conception de Sites Internet<br>
                    Réalisation de Maquettes et Logos<br>
                    Référencement SEO<br>
                    Marketing Digital<br>
                    Communication Événementielle<br>
                    Réalisation de Campagnes Publicitaires<br>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- FIN INTRO-->

<!-- PRESTATIONS CAROUSEL CARD mobile-->
<div class="text-center ms-2 me-2 d-block d-md-none"> 
    <div>

    <h2 class="border borderColor border-4 rounded p-2 mb-4 text-white fw-bold">
    Nos Services de Création Web et Marketing Digital
</h2>

<img src="images/bannercards.webp" alt="Description des étapes pour une transformation digital et monter l'entreprise vers les sommets" loading="lazy" class="img-fluid rounded mt-3 mb-3 w-100">

        <p class="text-white lead fs-2 fw-bold">
            Des solutions sur mesure pour satisfaire vos besoins.
        </p>
    </div>

    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Carte 1 -->
            <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                    <div class="card mt-2 card-uniform" style="width: 18rem;">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card1.png" alt="carte de présentation des service création de site web avec un robot" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid mt-2">
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 590,00 €</strong>
                        <div class="card-body">
                            <a href="formulaireDeContact.php" class="info btn text-white mb-4">Nous Contacter !</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <div class="card mt-2 card-uniform" style="width: 18rem;">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card2.png" alt="carte de présentation des services référencement naturel SEO avec un robot" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid mt-2">
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 490,00 €</strong>
                        <div class="card-body">
                            <a href="formulaireDeContact.php" class="info btn text-white mb-4">Nous Contacter !</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte 3 -->
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <div class="card mt-2 card-uniform" style="width: 18rem;">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card3.png" alt="carte de présentation des services maquettes et logos avec un robot" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid mt-2">
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 150,00 €</strong>
                        <div class="card-body">
                            <a href="formulaireDeContact.php" class="info btn text-white mb-4">Nous Contacter !</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte 4 -->
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <div class="card mt-2 card-uniform" style="width: 18rem;">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card4.png" alt="carte de présentation des services marketing digital avec un robot" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid mt-2">
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 750,00 €</strong>
                        <div class="card-body">
                            <a href="formulaireDeContact.php" class="info btn text-white mb-4">Nous Contacter !</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte 5 -->
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <div class="card mt-2 card-uniform" style="width: 18rem;">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card5.png" alt="carte de présentation des services communication événementiel avec un robot" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid mt-2">
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 350,00 €</strong>
                        <div class="card-body">
                            <a href="formulaireDeContact.php" class="info btn text-white mb-4">Nous Contacter !</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte 6 -->
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <div class="card mt-2 card-uniform" style="width: 18rem;">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card6.png" alt="carte de présentation des services campagne publicitaire avec un robot" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid mt-2">
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 250,00 €</strong>
                        <div class="card-body">
                            <a href="formulaireDeContact.php" class="info btn text-white mb-4">Nous Contacter !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contrôles du carrousel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- FIN PRESTATIONS CAROUSEL CARD mobile-->

<!-- PRESTATIONS CAROUSEL CARD DESKTOP-->
<div class="text-center ms-2 me-2 d-none d-md-block" > <!-- Affiche uniquement sur desktop -->
    <div>
        <h2 class="border borderColor border-4 rounded p-2 mb-4">
            <strong class="text-white"> Nos Services de Création Web et Marketing Digital</strong>
        </h2>
        
        <img src="images/bannercards.webp" alt="Description des étapes pour une transformation digital et monter l'entreprise vers les sommets" loading="lazy" class="img-fluid rounded w-75 m-5">

        <p class="text-white lead fs-2 fw-bold">
            Des solutions sur mesure pour satisfaire vos besoins.
        </p>
    </div>

    <div id="tarifCarousel" class="carousel slide carousel-container mt-1">
        <div class="carousel-inner">
            <!-- Premier groupe de cartes -->
            <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                    <div class="card mt-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card1.png" alt="carte de présentation des service création de site web avec un robot" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 590,00 €</strong>
                        <div class="card-body">
                            <a href="formulaireDeContact.php" class="info btn text-white mb-4">Nous Contacter !</a>
                        </div>
                    </div>

                    <div class="card mt-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card2.png" alt="carte de présentation des services référencement naturel SEO avec un robot" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 490,00 €</strong>
                        <div class="card-body">
                            <a href="formulaireDeContact.php" class="info btn text-white mb-4">Nous Contacter !</a>
                        </div>
                    </div>

                    <div class="card mt-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card3.png" alt="carte de présentation des services maquettes et logos avec un robot" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 150,00 €</strong>
                        <div class="card-body">
                            <a href="formulaireDeContact.php" class="info btn text-white mb-4">Nous Contacter !</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deuxième groupe de cartes -->
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <div class="card mt-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card4.png" alt="carte de présentation des services marketing digital avec un robot" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 750,00 €</strong>
                        <div class="card-body">
                            <a href="formulaireDeContact.php" class="info btn text-white mb-4">Nous Contacter !</a>
                        </div>
                    </div>

                    <div class="card mt-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card5.png" alt="carte de présentation des services communication événementiel avec un robot" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 350,00 €</strong>
                        <div class="card-body">
                            <a href="formulaireDeContact.php" class="info btn text-white mb-4">Nous Contacter !</a>
                        </div>
                    </div>

                    <div class="card mt-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card6.png" alt="carte de présentation des services campagne publicitaire avec un robot" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 250,00 €</strong>
                        <div class="card-body">
                            <a href="formulaireDeContact.php" class="info btn text-white mb-4">Nous Contacter !</a>
                        </div>
                    </div>
                </div>
            </div>
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
</div>
<!-- FIN PRESTATIONS CAROUSEL CARD DESKTOP-->

<!-- ROBOT VIDEO RESPONSIVE -->
<div class="container-fluid px-0 mb-5" style="margin-top:-50px;">
    <div class="text-center">
        <h2 class="border borderColor border-4 rounded p-2 ms-5 me-5">
            <strong class="text-white"> Des Robots Dévoués</strong>
        </h2>
        <p class="text-white lead fs-4 fs-md-2 ms-2 me-2 fw-bold mt-5">
            La Satisfaction Client en Priorité
        </p>
    </div>

    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="video-container">
            <video autoplay loop muted playsinline class="rounded">
                <source src="videos/robotordi.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la balise <code>video</code>.
            </video>
        </div>
    </div>
</div>

   
<!-- FIN ROBOT VIDEO RESPONSIVE -->

    <!-- DOMAINE DE COMPETENCE -->
<div class="text-center">
    <h2 class="border borderColor border-4 rounded p-2 m-3 mb-5  text-white fw-bold">
    Nos Compétences Clés
    </h2>
    
    <p class="text-white lead fs-2 ms-2 me-2 fw-bold">
        Ensemble, donnons vie à vos idées.
    </p>
</div>

<div class="d-flex ms-0 mb-5 position-relative text-center me-5" style="margin-top:-50px;">
    <!-- Image à gauche -->
    <img src="images/robotIntro3.webp" alt="Robot de décoration" loading="lazy" class="img-fluid robotDomaine2">

    <!-- Contenu principal -->
    <div class="w-75 text-white intro2 mt-5"> 
        <img src="images/robotIntro2.webp" alt="Robot de décoration" loading="lazy" class="img-fluid robotDomaine d-none d-md-block"> 

        <h3 class="neon-yellow mt-5 mb-5">Pourquoi Choisir Nos Services ?</h3>

        <div>
            <h4><strong>Expertise et Créativité</strong></h4>
            <p class="fs-5">
                <strong>
                    Notre équipe expérimentée apporte des solutions innovantes et personnalisées à chaque projet.
                </strong>
            </p>
        </div>

        <div>
            <img src="images/intro2RobotSeparateur.png" alt="Robot Séparateur de texte Expertise et Créativité" loading="lazy" class="img-fluid robotSeparateur"> 
        </div>

        <div>
            <h4><strong>Approche Personnalisée</strong></h4>
            <p class="fs-5"> 
                <strong>
                    Nous travaillons en étroite collaboration avec vous pour comprendre vos besoins et objectifs spécifiques.
                </strong>
            </p>
        </div>

        <div>
            <img src="images/intro2RobotSeparateur2.png" alt="Robot Séparateur de texte Approche Personnalisée" loading="lazy" class="img-fluid robotSeparateur"> 
        </div>

        <div>
            <h4><strong>Résultats Mesurables</strong></h4>
            <p class="fs-5">
                <strong>
                    Nous mettons en place des indicateurs de performance pour suivre et optimiser les résultats de nos actions.
                </strong>
            </p>
        </div>

        <div>
            <img src="images/intro2RobotSeparateur3.png" alt="Robot Séparateur de texte Résultats Mesurables" loading="lazy" class="img-fluid robotSeparateur mb-5"> 
        </div>
    </div>
</div>
<!-- FIN DOMAINE DE COMPETENCE -->

<!-- ROBOT VIDEO DESKTOP -->
<div class="container-fluid px-0 mb-5 d-none d-md-block">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="video-container" style="max-width: 50%; margin: auto;">
            <!-- La vidéo se lit automatiquement, en boucle, sans son, et est compatible avec le mode plein écran -->
            <video autoplay loop muted playsinline class="rounded w-100">
                <source src="videos/robotParle1.mp4" type="video/mp4">
                <!-- Message affiché si la balise video n'est pas supportée par le navigateur -->
                Votre navigateur ne supporte pas la balise <code>video</code>.
            </video>
        </div>
    </div>
</div>
<!-- FIN ROBOT VIDEO DESKTOP-->

<!-- ROBOT VIDEO MOBILE -->
<div class="container-fluid px-0 mb-5 d-block d-md-none">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh; margin-top: -100px; margin-bottom: -50px;">
        <div class="video-container" style="width: 100%;">
            <!-- Même configuration pour la version mobile -->
            <video autoplay loop muted playsinline class="rounded w-100">
                <source src="videos/robotParle1.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la balise <code>video</code>.
            </video>
        </div>
    </div>
</div>
<!-- FIN ROBOT VIDEO MOBILE -->

<h2 class="text-center border borderColor border-4 rounded p-2 m-3 mb-5 text-white fw-bold">
    Nos Services Web Complets
</h2>


<!-- REFERENCE DESKTOP -->
<div class="d-none d-md-flex ms-5 mb-5 position-relative justify-content-center">
    <div class="w-50 textIntro neon-section">
        <img src="images/robotCompetence.webp" alt="Robot de décoration séparateur de texte" loading="lazy" class="img-fluid robotDomaine"> 

        <div class="m-5">
            <div class="text-center">
                <h5 class="neon-yellow rounded">GESTION DE PROJET WEB</h5>
                <p class="text-white lead"><strong>Site vitrine, corporate, évènementiel, e-commerce adaptable mobile et tablette</strong></p>
            </div>

            <div>
                <img src="images/robotSeparateur.png" alt="Robot de décoration séparateur de texte" loading="lazy" class="img-fluid robotSeparateur"> 
            </div>

            <div class="text-center">
                <h5 class="neon-yellow rounded">CONCEPTION GRAPHIQUE & WEBDESIGN</h5>
                <p class="text-white lead"><strong>Logos, templates Web, plaquettes publicitaires, cartes de visite, newsletters...</strong></p>
            </div>

            <div>
                <img src="images/robotSeparateur2.png" alt="Robot de décoration séparateur de texte" loading="lazy" class="img-fluid robotSeparateur"> 
            </div>

            <div class="text-center">
                <h5 class="neon-yellow rounded">INTERFACE D'ADMINISTRATION</h5>
                <p class="text-white lead"><strong>PHP et MYSQL</strong></p>
            </div>

            <div>
                <img src="images/robotSeparateur3.png" alt="Robot de décoration séparateur de texte" loading="lazy" class="img-fluid robotSeparateur"> 
            </div>

            <div class="text-center">
                <h5 class="neon-yellow rounded">INTEGRATION HTML / CSS</h5>
                <p class="text-white lead"><strong>Codage à la main respectueux des standards du web</strong></p>
            </div>

            <div>
                <img src="images/robotSeparateur4.png" alt="Robot de décoration séparateur de texte" loading="lazy" class="img-fluid robotSeparateur"> 
            </div>

            <div class="text-center">
                <h5 class="neon-yellow rounded">DYNAMISATION DES PAGES PAR JAVASCRIPT</h5>
                <p class="text-white lead"><strong>React et Vue.js</strong></p>
            </div>

            <div>
                <img src="images/robotSeparateur5.png" alt="Robot de décoration séparateur de texte" loading="lazy" class="img-fluid robotSeparateur"> 
            </div>

            <div class="text-center">
                <h5 class="neon-yellow rounded">VALIDATION W3C & REFERENCEMENT NATUREL SEO</h5>
                <p class="text-white lead"><strong>Accessibilité & ergonomie des pages web</strong></p>
            </div>

            <div>
                <img src="images/robotSeparateur6.webp" alt="Robot de décoration séparateur de texte" loading="lazy" class="img-fluid robotSeparateur"> 
            </div>

            <div class="text-center">
                <h5 class="neon-yellow rounded">CONCEPTION MULTI-PLATEFORME</h5>
                <p class="text-white lead"><strong>Compatible tous supports, tablette & application mobile</strong></p>
            </div>
        </div>
    </div>
    <div class="robotIndex position-absolute top-50 end-0 translate-middle-y d-none d-md-block">
        <img src="images/robotIntro.webp" alt="Robot de décoration séparateur de texte" loading="lazy" class="img-fluid"> 
    </div>
</div>
<!-- FIN REFERENCE DESKTOP -->

<!-- REFERENCE MOBILE -->
<div class="d-block d-md-none d-flex ms-0 mb-5 position-relative ms-2 me-5">
    <!-- Contenu principal à gauche -->
    <div class="w-75 neon-section text-center">
        <img src="images/robotCompetence.webp" alt="Robot de décoration séparateur de texte" loading="lazy" class="img-fluid robotDomaine3 w-50"> 

        <div class="m-3">
            <div class="mb-3">
                <h5 class="neon-yellow rounded">GESTION DE PROJET WEB</h5>
                <p class="text-white lead fw-bold">Site vitrine, corporate, évènementiel, e-commerce adaptable mobile et tablette</p>
            </div>

            <img src="images/robotSeparateur.png" alt="Robot de décoration séparateur de texte" loading="lazy" class="img-fluid robotSeparateur mb-3"> 

            <div class="mb-3">
                <h5 class="neon-yellow rounded">CONCEPTION GRAPHIQUE & WEBDESIGN</h5>
                <p class="text-white lead fw-bold">Logos, templates Web, plaquettes publicitaires, cartes de visite, newsletters...</p>
            </div>

            <img src="images/robotSeparateur2.png" alt="Robot de décoration séparateur de texte" loading="lazy" class="img-fluid robotSeparateur mb-3"> 

            <div class="mb-3">
                <h5 class="neon-yellow rounded">INTERFACE D'ADMINISTRATION</h5>
                <p class="text-white lead fw-bold">PHP et MYSQL</p>
            </div>

            <img src="images/robotSeparateur3.png" alt="Robot de décoration séparateur de texte" loading="lazy" class="img-fluid robotSeparateur mb-3"> 

            <div class="mb-3">
                <h5 class="neon-yellow rounded">INTEGRATION HTML / CSS</h5>
                <p class="text-white lead fw-bold">Codage à la main respectueux des standards du web</p>
            </div>

            <img src="images/robotSeparateur4.png" alt="Robot de décoration séparateur de texte" loading="lazy" class="img-fluid robotSeparateur mb-3"> 

            <div class="mb-3">
                <h5 class="neon-yellow rounded">DYNAMISATION DES PAGES PAR JAVASCRIPT</h5>
                <p class="text-white lead fw-bold">React et Vue.js</p>
            </div>

            <img src="images/robotSeparateur5.png" alt="Robot de décoration séparateur de texte" loading="lazy" class="img-fluid robotSeparateur mb-3"> 

            <div class="mb-3">
                <h5 class="neon-yellow rounded">VALIDATION W3C & REFERENCEMENT NATUREL SEO</h5>
                <p class="text-white lead fw-bold">Accessibilité & ergonomie des pages web</p>
            </div>

            <img src="images/robotSeparateur6.webp" alt="Robot de décoration séparateur de texte" loading="lazy" class="img-fluid robotSeparateur mb-3"> 

            <div class="pb-4">
                <h5 class="neon-yellow rounded">CONCEPTION MULTI-PLATEFORME</h5>
                <p class="text-white lead fw-bold">Compatible tous supports, tablette & application mobile</p>
            </div>
        </div>
    </div>

    <!-- Image robotIntro à droite -->
    <img src="images/robotIntro.webp" alt="Robot d'illustration déco" loading="lazy" class="img-fluid ms-auto small-robot">
</div>
<!-- FIN REFERENCE MOBILE -->



<!-- SECTION CONTACT -->
<div class="d-flex justify-content-center align-items-center vh-75 ms-4 me-4">
    <div class="text-center">
        <p class="fs-4 text-white p-3 rounded">
            <strong>
                N'hésitez pas à nous contacter pour discuter de votre projet et découvrir comment nous pouvons vous aider à atteindre vos objectifs.<br>
            </strong>
        </p>
    </div>
</div>
<!-- FIN SECTION CONTACT -->

<!-- SECTION VIDEOCOM -->
<div class="text-center mt-4 container mb-5">
    <div class="container">
        <div class="robotCampagne">
            <h2 class=" text-white fw-bold border borderColor border-4 rounded p-2 m-3 mb-5">
            Vidéos de Campagnes et Événements
            </h2>
            <img src="images/robotVideo.webp" alt="image robot" loading="lazy" class="robotVideo img-fluid w-25">
        </div>
    </div>
    <div class="row justify-content-center g-0 g-md-5">
        <div class="col-md-6 mb-4 mb-md-0">
            <div class="videoCom embed-responsive embed-responsive-16by9">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/x11QdyjodtM?si=R-_wiZVwgNNjgODr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <div class="text-orange-video lead">Campagne De Financement Participatif</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="videoCom embed-responsive embed-responsive-16by9">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/G-B7-NNemiI?si=6n5RGhrVoRGKNBX3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <div class="text-orange-video lead">Invitation Anniversaire</div>
            </div>
        </div>
    </div>
                </div>
<!-- FIN SECTION VIDEOCOM -->

<!-- PRESENTATION LOGOS -->
<div class="text-center mt-4 ms-2 me-2">
    <div>
        <h2 class="border borderColor border-4 rounded p-2 m-5">
            <strong class="text-white">Logos Réalisés</strong>
        </h2>
        <p class="text-white lead fs-2 pb-5 fw-bold">
            À l'image de votre entreprise avec ou sans animations
        </p>
    </div>

    <div id="logoCarousel" class="carousel slide carousel-container">
        <div class="carousel-inner">
            <!-- Diapositive contenant toutes les cartes -->
            <div class="carousel-item active">
                <div class="d-flex overflow-auto">
                    <div class="card2 mx-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/logo1.webp" alt="logo client application musique" loading="lazy" class="imgcard2 img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                    </div>
                    <div class="card2 mx-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/logo2.webp" alt="logo client Diversens" loading="lazy" class="imgcard2 img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                    </div>
                    <div class="card2 mx-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/logo3.webp" alt="logo client pour un mariage" loading="lazy" class="imgcard2 img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                    </div>
                    <div class="card2 mx-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/logo4.webp" alt="logo client pour un garage" loading="lazy" class="imgcard2 img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                    </div>
                    <div class="card2 mx-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/logo5.webp" alt="logo client institut de beauté" loading="lazy" class="imgcard2 img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                    </div>
                    <div class="card2 mx-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/logo6.webp" alt="logo client institut de beauté" loading="lazy" class="imgcard2 img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                    </div>
                    <div class="card2 mx-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/logo7.webp" alt="logo client surfcamp" loading="lazy" class="imgcard2 img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                    </div>
                    <div class="card2 mx-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/logo8.webp" alt="logo client restaurant" loading="lazy" class="imgcard2 img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                    </div>
                    <div class="card2 mx-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/logo9.webp" alt="logo client bar restaurant" loading="lazy" class="imgcard2 img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
<!-- FIN PRESENTATION LOGOS -->

<div class="text-center mt-4 ms-2 me-2">
    <div>
        <h2 class="border borderColor border-4 rounded p-2 m-5">
            <strong class="text-white">Réalisation d'un projet client</strong>
        </h2>
        <p class="text-white lead fs-1 pb-5 fw-bold">
        Grâce à Harmony Digital, l'entreprise Les Caravanes de la Besbre a placé sa confiance en nous, et les résultats parlent d'eux-mêmes.   </p>
    </div>

<!-- ROBOT VIDEO DESKTOP -->
<div class="container-fluid px-0 mb-5 d-none d-md-block" style="margin-left: 80px">
    <div class="row justify-content-center align-items-center g-5" style="min-height: 50vh;">
        <!-- Video Section -->
        <div class="col-md-6 d-flex justify-content-center">
            <video autoplay loop muted playsinline class="rounded w-100">
                <source src="videos/robotpresentation4.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la balise <code>video</code>.
            </video>
        </div>

        <!-- Image Section -->
        <div class="col-md-6 d-flex justify-content-center">
            <a href="https://lescaravanesdelabesbre.fr/" target="_blank" rel="noopener noreferrer">
                <img src="images/caravanesdelabesbre.webp" alt="Description de l'image" class="img-fluid w-75">
            </a>
        </div>
    </div>
</div>
<!-- FIN ROBOT VIDEO DESKTOP -->



<!-- ROBOT VIDEO MOBILE -->
<div class="container-fluid px-0 d-block d-md-none">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh; margin-top:-150px;">
        <div class="video-container" style="width: 100%;">
            <video autoplay loop muted playsinline class="rounded w-100">
                <source src="videos/robotpresentation4.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la balise <code>video</code>.
            </video>
        </div>
    </div>
</div>
<!-- FIN ROBOT VIDEO MOBILE -->
    

<!-- SECTION FINALE -->
<div class="text-center">
    <p class="text-white lead mb-5 fw-bold press-start-2p-regular">
        <img src="images/robotFinIndex1.webp" alt="robot illustratif" loading="lazy" class="img-fluid img-small">
        Propulsons votre entreprise vers les étoiles.
        <img src="images/robotFinIndex2.webp" alt="robot illustratif" loading="lazy" class="img-fluid img-small">
    </p>
</div>

    <?php include("footer.php"); ?>

 <!-- COMPTE A REBOURS -->
 <script>
    function updateCountdown() {
        const targetDate = new Date("2024-12-31T23:59:59").getTime();
        const now = new Date().getTime();
        const timeLeft = targetDate - now;

        if (timeLeft < 0) {
            document.getElementById("countdown").innerHTML = "00  JOURS 00H 00M 00S";
            clearInterval(countdownTimer);
            return;
        }

        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

        const formattedTime = `
            <span class="time-part">${String(days).padStart(2, '0')}</span> JOURS
            <span class="time-part">${String(hours).padStart(2, '0')}</span>H
            <span class="time-part">${String(minutes).padStart(2, '0')}</span>M
            <span class="time-part">${String(seconds).padStart(2, '0')}</span>S
        `;
        document.getElementById("countdown").innerHTML = formattedTime;
    }

    updateCountdown();
    const countdownTimer = setInterval(updateCountdown, 1000);
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const numParticles = 100; // Nombre total de particules
    const currencyBackground = document.getElementById('currency-background');
    const characters = ['0', '1']; // Chiffres 0 et 1

    function createParticle() {
        const particle = document.createElement('div');
        particle.className = 'currency-particle';
        particle.textContent = characters[Math.floor(Math.random() * characters.length)];
        particle.style.left = `${Math.random() * 100}vw`;
        particle.style.top = `${Math.random() * 100}vh`;
        particle.style.animationDuration = `${Math.random() * 5 + 5}s`; // Durée de l'animation entre 5 et 10 secondes
        currencyBackground.appendChild(particle);
    }

    for (let i = 0; i < numParticles; i++) {
        createParticle();
    }

    window.addEventListener('resize', () => {
        currencyBackground.innerHTML = '';
        for (let i = 0; i < numParticles; i++) {
            createParticle();
        }
    });
});
</script>

</body>
  </html>