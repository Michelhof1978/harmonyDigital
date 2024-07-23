<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("head.php"); ?>
    <meta name="description" content="">
    <title>Harmony Digital</title>
    <style>
h4 {
    color: #FFFF66; /* Jaune néon très clair */
}

        

        /* CARDS */
        .card {
            transform: scale(0.7);
            transform-origin: center center;
            flex: 1 0 30%;
            box-sizing: border-box;
            margin: 0 -90px;
            background-image: url('Images/fondBleu.png');
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

    .pricecard{
font-size: 25px !important;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
margin-top: -100px;

    }

    .info {
    font-size: 30px !important;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    border: 5px solid #e06717e4; /* Vous pouvez ajuster l'épaisseur selon vos besoins */
   
}
/* Domaine de compétence */
.textIntro {
	margin-top: 40px;
    background-image: url('Images/fondBleu.png');
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
    padding: 10px; /* Ajouter du padding pour que l'effet soit plus visible */
    display: inline-block; /* Nécessaire pour que le box-shadow soit visible */
}


.neon-section {
  border-radius: 5px;
}

.robotDomaine {
    max-width: 50%; /* Ajustez la valeur en pourcentage pour réduire l'image */
  height: 150px; /* Conserve le ratio de l'image */
  display: block;
  margin: 0 auto; /* Centre l'image */
  margin-top: 20px;
}
.robotSeparateur {
    max-width: 50%; /* Ajustez la valeur en pourcentage pour réduire l'image */
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
    background-image: url('Images/fondBleu.png');
  background-size: cover;
    background-position: center;
   background-repeat: no-repeat;
   border-radius: 5px;
     
 } 
 /*Fin Intro*/
  /*Intro2*/
 .robotDomaine2 {
    max-width: 25%; /* Ajustez cette valeur selon la taille souhaitée de l'image */
    height: auto; /* Conserve le ratio de l'image */
    position: absolute; /* Positionnement absolu */
    left: 0; /* Aligne l'image complètement à gauche */
    top: 40px; /* Décale l'image vers le bas depuis le haut du conteneur */
    margin-top: 300px;
}

.intro2 {
    margin-left: 30%; /* Ajustez cette valeur pour faire de la place pour l'image */
    padding-left: 20px; /* Optionnel : ajoute un espace entre l'image et le texte */
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

    </style>
</head>
<body>
    
    <?php include("header.php"); ?>

    <div id="binary-background"></div>
 <!-- INTRO-->
    <div class="mt-5">
        <h1 class="border borderColor border-4 rounded p-2 col m-2 text-center">
            <strong class="text-white"><span class="text-orange-titre">C</span>oncepteur<span class="text-orange-titre"> D</span>e <span class="text-orange-titre">S</span>ites<span class="text-orange-titre"> I</span>nternet <span class="text-orange-titre">E</span>t<span class="text-orange-titre"> E</span>n <span class="text-orange-titre">S</span>tratégie<span class="text-orange-titre"> D</span>igitale</strong>
        </h1>
    </div>

    <section class="mt-5 container">
    <div class="d-flex align-items-center justify-content-center">

        <div class="offre ">
            <img src="images/offre2024.png" alt="robot" loading="lazy" class="img-fluid w-75">
        </div>

        <div class="w-100 text-white intro ">
            <p class="m-5 lead fs-4 neon-yellow text-center text-white" >
                <strong>
Conception de Sites Internet<br>
Réalisation Maquettes et Logos<br>
Référencement SEO<br>
Marketing Digital<br>
Communication En Événementielle<br>
Réalisation Campagne Publicitaire<br>
</strong>
            </p>
        </div>

    </div>
</section>

     <!-- PRESTATIONS -->
     <section class="text-center mt-4 ms-2 me-2">
        <div>
            <h2 class="border borderColor border-4 rounded p-2  m-5">
                <strong class="text-white"><span class="text-orange-titre">N</span>os<span class="text-orange-titre"> P</span>restations</strong>
                <p class="text-white lead fs-2"><strong>Des prestations adaptées à vos besoins</strong></p>
            </h2>
            
        </div>

        <div id="tarifCarousel" class="carousel slide carousel-container">
            <div class="carousel-inner">
                <!-- Premier groupe de cartes -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="images/card1.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                                <p class="textcard card-text text-white">
                                    
                                </p>
                            </div>
                            <strong class="pricecard text-white custom-animation mb-5">À partir de 890,00 €</strong>
                            <div class="card-body">
                                <a href=".php" class=" info btn text-white mb-5">Plus d'infos !</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="images/card2.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                                <p class="textcard card-text text-white">
                                   
                                </p>
                            </div>
                            <strong class="pricecard text-white custom-animation mb-5">À partir de 790,00 €</strong>
                            <div class="card-body">
                                <a href=".php" class="info btn text-white">Plus d'infos !</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="images/card3.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                                <p class="textcard card-text text-white">
                                    
                                </p>
                            </div>
                            <strong class="pricecard text-white custom-animation mb-5">À partir de 125,00 €</strong>
                            <div class="card-body">
                                <a href=".php" class="info btn text-white">Plus d'infos !</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deuxième groupe de cartes -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="images/card4.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                                <p class="textcard card-text text-white">
                                    
                                </p>
                            </div>
                            <strong class="pricecard text-white custom-animation mb-5">À partir de 750,00 €</strong>
                            <div class="card-body">
                                <a href=".php" class="info btn text-white">Plus d'infos !</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="images/card5.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                                <p class="textcard card-text text-white">
                                   
                                </p>
                            </div>
                            <strong class="pricecard text-white custom-animation mb-5">À partir de 350,00 €</strong>
                            <div class="card-body">
                                <a href=".php" class="info btn text-white">Plus d'infos !</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="images/card6.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                                <p class="textcard card-text text-white">
                                   
                                </p>
                            </div>
                            <strong class="pricecard text-white custom-animation mb-5">À partir de 250,00 €</strong>
                            <div class="card-body fs-5 mb-5">
                                <a href=".php" class="info btn text-white ">Plus d'infos !</a>
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
    </section>

    <!-- DOMAINE DE COMPETENCE -->
    <div class="text-center">
            <h2 class="border borderColor border-4 rounded p-2  m-3 mb-5">
            <strong class="text-white"><span class="text-orange-titre">D</span>omaine<span class="text-orange-titre"> D</span>e <span class="text-orange-titre"> C</span>ompétences</strong>
            <p class="text-white lead fs-2"><strong> Ensemble, donnons vie à vos idées et propulsons votre entreprise vers de nouveaux sommets.
            </strong></p>
            </h2>
            
        </div>

        <section class="d-flex ms-0 mb-5 position-relative text-center me-5">
  <!-- Image à gauche -->
  <img src="images/robotIntro3.png" alt="robot" loading="lazy" class="img-fluid robotDomaine2">
  
  <!-- Contenu principal -->
  <div class="w-75 text-white intro2 mt-5"> 
    <img src="images/robotIntro2.png" alt="robot" loading="lazy" class="img-fluid robotDomaine"> 

    <h3 class="neon-yellow mt-5 mb-5">Pourquoi Choisir Nos Services ?</h3><br>

    <div>
  <h4><strong>Expertise et Créativité</strong></h4>
  <p class="fs-5">
  <strong>
    Notre équipe expérimentée apporte des solutions innovantes et personnalisées à chaque projet.
    </strong>
</p>
</div>

<div>
 <img src="images/intro2RobotSeparateur.png" alt="robot" loading="lazy" class="img-fluid robotSeparateur"> 
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
 <img src="images/intro2RobotSeparateur2.png" alt="robot" loading="lazy" class="img-fluid robotSeparateur"> 
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
 <img src="images/intro2RobotSeparateur3.png" alt="robot" loading="lazy" class="img-fluid robotSeparateur mb-5"> 
</div>

    <div class="d-flex justify-content-center align-items-center full-height">
        <div class="text-center">
            <p class="neon-yellow fs-5 text-white">
                <strong>
                    N'hésitez pas à nous contacter pour discuter de votre projet et découvrir comment nous pouvons vous aider à atteindre vos objectifs.<br>
                </strong>
            </p>
        </div>
  </div>
</section>


     
     <section class="d-flex ms-5 mb-5 position-relative justify-content-center ">
     
    <div class="w-50 textIntro neon-section">

   
        <img src="images/robotCompetence.png" alt="robot" loading="lazy" class="img-fluid robotDomaine"> 
    
    
        <div class="m-5">
            <div class="text-center">
                <h5 class="neon-yellow rounded">GESTION DE PROJET WEB</h5>
                <p class="text-white lead"><strong>Site vitrine, corporate, évènementiel, e-commmerce adaptable mobile et tablette</strong></p>
            </div>

            <div>
            <img src="images/robotSeparateur.png" alt="robot" loading="lazy" class="img-fluid robotSeparateur"> 
            </div>
            
            <div class="text-center">
                <h5 class="neon-yellow rounded">CONCEPTION GRAPHIQUE & WEBDESIGN</h5>
                <p class="text-white lead"><strong>Logos, templates Web, plaquettes publicitaires, cartes de visite, newsletters...</strong></p>
            </div>

            <div>
            <img src="images/robotSeparateur2.png" alt="robot" loading="lazy" class="img-fluid robotSeparateur"> 
            </div>

            <div class="text-center">
                <h5 class="neon-yellow rounded">INTERFACE D'ADMINISTRATION</h5>
                <p class="text-white lead"><strong>PHP et MYSQL</strong></p>
            </div>

            <div>
            <img src="images/robotSeparateur3.png" alt="robot" loading="lazy" class="img-fluid robotSeparateur"> 
            </div>

            <div class="text-center">
                <h5 class="neon-yellow rounded">INTEGRATION HTML / CSS</h5>
                <p class="text-white lead"><strong>Codage à la main respectueux des standards du web</strong></p>
            </div>

            <div>
            <img src="images/robotSeparateur4.png" alt="robot" loading="lazy" class="img-fluid robotSeparateur"> 
            </div>

            <div class="text-center">
                <h5 class="neon-yellow rounded">DYNAMISATION DES PAGES PAR JAVASCRIPT</h5>
                <p class="text-white lead"><strong>React et Vue.js</strong></p>
            </div>

            <div>
            <img src="images/robotSeparateur5.png" alt="robot" loading="lazy" class="img-fluid robotSeparateur"> 
            </div>

            <div class="text-center">
                <h5 class="neon-yellow rounded">VALIDATION W3C & REFERENCEMENT NATUREL SEO</h5>
                <p class="text-white lead"><strong>Accessibilité & ergonomie des pages web</strong></p>
            </div>

            <div>
            <img src="images/robotSeparateur6.png" alt="robot" loading="lazy" class="img-fluid  robotSeparateur"> 
            </div>

            <div class="text-center">
                <h5 class="neon-yellow rounded">CONCEPTION MULTI-PLATEFORME</h5>
                <p class="text-white lead"><strong>Compatible tous supports, tablette & application mobile</strong></p>
            </div>
        </div>
    </div>
    <div class="robotIndex position-absolute top-50 end-0 translate-middle-y">
        <img src="images/robotIntro.png" alt="robot" loading="lazy" class="img-fluid"> 
    </div>
</section>



<!--SECTION VIDEOCOM-->
<section class="text-center mt-4 container mb-5">
  <div class="container">
    <div class="robotCampagne">
      <h2 class="text-white neon-yellow"><strong>Réalisations Campagnes</strong></h2>
      <img src="images/robotVideo" alt="image robot" loading="lazy" class="robotVideo img-fluid w-25">
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
</section>
<!--FIN SECTION VIDEOCOM-->

 <!-- PRESENTATION LOGOS -->
 <section class="text-center mt-4 ms-2 me-2">
        <div>
            <h2 class="border borderColor border-4 rounded p-2 m-5">
                <strong class="text-white">
                    <span class="text-orange-titre">L</span>ogos<span class="text-orange-titre"> R</span>éalisés
                </strong>
                <p class="text-white lead fs-2">
                    <strong>A l'image de votre entreprise avec ou sans animations</strong>
                </p>
            </h2>
        </div>

        <div id="logoCarousel" class="carousel slide carousel-container">
            <div class="carousel-inner">
                <!-- Groupe de cartes -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-4 mb-4 d-flex justify-content-center">
                                <div class="card mx-2">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="images/logo1.png" alt="logo client" loading="lazy" class="imgcard img-fluid">
                                        <p class="textcard card-text text-white"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 d-flex justify-content-center">
                                <div class="card mx-2">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="images/logo2.png" alt="logo client" loading="lazy" class="imgcard img-fluid">
                                        <p class="textcard card-text text-white"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 d-flex justify-content-center">
                                <div class="card mx-2">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="images/logo3.png" alt="logo client" loading="lazy" class="imgcard img-fluid">
                                        <p class="textcard card-text text-white"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ajoute plus de groupes de cartes -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-4 mb-4 d-flex justify-content-center">
                                <div class="card mx-2">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="images/logo4.png" alt="logo client" loading="lazy" class="imgcard img-fluid">
                                        <p class="textcard card-text text-white"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 d-flex justify-content-center">
                                <div class="card mx-2">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="images/logo5.png" alt="logo client" loading="lazy" class="imgcard img-fluid">
                                        <p class="textcard card-text text-white"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 d-flex justify-content-center">
                                <div class="card mx-2">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="images/logo6.png" alt="logo client" loading="lazy" class="imgcard img-fluid">
                                        <p class="textcard card-text text-white"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ajoute d'autres groupes de cartes ici -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-4 mb-4 d-flex justify-content-center">
                                <div class="card mx-2">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="images/logo7.png" alt="logo client" loading="lazy" class="imgcard img-fluid">
                                        <p class="textcard card-text text-white"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 d-flex justify-content-center">
                                <div class="card mx-2">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="images/logo8.png" alt="logo client" loading="lazy" class="imgcard img-fluid">
                                        <p class="textcard card-text text-white"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 d-flex justify-content-center">
                                <div class="card mx-2">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="images/logo9.png" alt="logo client" loading="lazy" class="imgcard img-fluid">
                                        <p class="textcard card-text text-white"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Contrôles du carrousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#logoCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#logoCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>

        </div>
    </section>

<!-- FIN PRESENTATION LOGOS-->
    <?php include("footer.php"); ?>

 <!-- COOKIES -->
<script>
    // Fonction pour obtenir la valeur d'un cookie
    function getCookie(name) {
        let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        if (match) return match[2];
    }

    // Fonction pour définir un cookie avec une durée d'expiration (en jours)
    function setCookie(name, value, days) {
        let expires = '';
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = '; expires=' + date.toUTCString();
        }
        document.cookie = name + '=' + value + expires + '; path=/';
    }

    // Fonction appelée lorsqu'un utilisateur accepte les cookies
    function acceptCookies() {
        // Ajoutez ici le code pour définir les cookies ou effectuer d'autres actions nécessaires

        // Définir un cookie indiquant que l'utilisateur a accepté les cookies
        setCookie('cookieConsent', 'accepted', 365);

        document.getElementById('cookie-banner').style.display = 'none';
    }

    // Fonction appelée lorsqu'un utilisateur refuse les cookies
    function refuseCookies() {

        document.getElementById('cookie-banner').style.display = 'none';
    }

    // Vérifier si l'utilisateur a déjà accepté les cookies
    if (getCookie('cookieConsent') !== 'accepted') {
        // Affiche la bannière de consentement après un délai 
        setTimeout(function() {
            document.getElementById('cookie-banner').style.display = 'block';
        }, 2000);
    }
</script>

<!-- Affichage Popup -->
<script>
  Fonction pour vérifier si le popup a déjà été affiché aujourd'hui
  function isPopupShown() {
   const date = new Date();
   const dateString = `${date.getFullYear()}/${date.getMonth() + 1}/${date.getDate()}`;
   return document.cookie.includes(`popupShown=${dateString}`);
 / }

  //Fonction pour définir le cookie indiquant que le popup a été affiché aujourd'hui
 function setPopupShown() {
    const date = new Date();
    //Fixer l'expiration à la fin du jour
   date.setHours(23, 59, 59, 999);
   const dateString = `${date.getFullYear()}/${date.getMonth() + 1}/${date.getDate()}`;
   document.cookie = `popupShown=${dateString}; expires=${date.toUTCString()}; path=/`;
 }

  //Vérifie si le popup n'a pas déjà été montré aujourd'hui
  if (!isPopupShown()) {
   let popupDiv = document.createElement("div");
   popupDiv.style.cssText = "position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999; text-align: center; background: white; padding: 20px; border: 1px solid #ccc; border-radius: 8px;";

   let img = document.createElement("img");
    img.src = "../images/lePal2024.png"; 
   img.style.height = window.innerWidth < 600 ? '80%' : '60%';
   img.style.width = img.style.height;
   popupDiv.appendChild(img);

   let closeButton = document.createElement("button");
   closeButton.textContent = "X";
   closeButton.style.cssText = "position: absolute; top: 10px; right: 10px; cursor: pointer; border: none; background: transparent; font-size: 16px;";
   closeButton.onclick = function () {
     document.body.removeChild(popupDiv);
     setPopupShown();
   };
    popupDiv.appendChild(closeButton);

   document.body.appendChild(popupDiv);

    //Optionnel: fermeture automatique après 30 secondes
    setTimeout(function() {
      if (document.body.contains(popupDiv)) {
       document.body.removeChild(popupDiv);
     }
     setPopupShown();
   }, 30000);
  }
</script>



<!-- _____________________________________________________________________________________ -->

</body>
  </html>

  
