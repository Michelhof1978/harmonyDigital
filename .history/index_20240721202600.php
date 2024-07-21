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

    </style>
</head>
<body>
    
    <?php include("header.php"); ?>

    <div id="binary-background"></div>

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
                            <strong class="pricecard text-white custom-animation mb-5">À partir de 890,00 €</strong>
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
                            <strong class="pricecard text-white custom-animation mb-5">À partir de 890,00 €</strong>
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
                            <strong class="pricecard text-white custom-animation mb-5">À partir de 890,00 €</strong>
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
                            <strong class="pricecard text-white custom-animation mb-5">À partir de 890,00 €</strong>
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
                            <strong class="pricecard text-white custom-animation mb-5">À partir de 890,00 €</strong>
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

<!--Section: Content VIDEO PAL-->
<section class="text-center mt-4 m-2">
  <h4 class="m-5 text-center border border-3 rounded text-white p-2 display-6 h4Index"><strong>VISITE AU PARC LE PAL</strong></h4>
  
  <div class="text-center">
    <h2 class="mb-4">Nouvelle Attraction 2024 </h2>
    <img src="../images/attraction2024.jpg" alt="Nouvelle attraction le pal 2024" loading="lazy" class="img-fluid w-75 w-md-50 rounded-2 mb-5">
</div>

  
      <div class="container">
    <div class="row g-0 flex-column flex-md-row">

        <div class="col">
            <div class="videoCom embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="<?php echo PENICHE_URL; ?>" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="video-description">Video campagne de financement participatif</div>
            </div>
        </div>

        <div class="col text-center align-self-center">
            <h2 class="billeterie text-white display-6">Réalisations Campagnes </h2>
            <img src="images/" alt="Logo le pal" loading="lazy" class="robotVideo img-fluid "></a>
        </div>

        <div class="col d-none d-md-block">
            <div class="videoCom embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="<?php echo INVITATION_URL; ?>" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="video-description">Vidéo Invitation Anniversaire</div>
            </div>
        </div>

    </div>
</div>


</section>


    <?php include("footer.php"); ?>

    
  