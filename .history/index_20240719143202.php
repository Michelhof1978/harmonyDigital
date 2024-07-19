<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("head.php"); ?>
    <meta name="description" content="">
    <title>Harmony Digital</title>
    <style>
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
/* Texte intro */
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
    width: 25%; 
    margin-top: 50px;
}

.neon-yellow {
    color: #FFFF33; /* Code couleur pour un jaune néon plus clair */
    text-shadow: 0 0 5px rgba(255, 255, 51, 0.5), 
                 0 0 10px rgba(255, 255, 51, 0.5), 
                 0 0 20px rgba(255, 255, 51, 0.5);
}

 
 /* Fin Texte intro */
 /* FIN CARDS */
    

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

     <!-- PRESENTATION -->
     <section class="d-flex ms-5 position-relative justify-content-center rounded">
    <div class="w-75 textIntro">
        <div class="mt-4 mb-4 ">
            <div class="text-center">
                <h4 class="neon-yellow">GESTION DE PROJET WEB</h4>
                <p class="text-white lead"><strong>Site vitrine, corporate, évènementiel, e-commmerce adaptable mobile et tablette</strong></p>
            </div>
            
            <div class="text-center">
            <h4 class="neon-yellow">CONCEPTION GRAPHIQUE & WEBDESIGN</h4>
                <p class="text-white lead"><strong>Logos, templates Web, plaquettes publicitaires, cartes de visite, newsletters...</strong></p>
            </div>

            <div class="text-center">
            <h4 class="neon-yellow">INTERFACE D'ADMINISTRAION</h4>
                <p class="text-white lead"><strong>PHP et MYSQL</strong></p>
            </div>

            <div class="text-center">
            <h4 class="neon-yellow">INTEGRATION HTML / CSS</h4>
                <p class="text-white lead"><strong>Codage à la main respectueux des standards du web</strong></p>
            </div>

            <div class="text-center">
            <h4 class="neon-yellow">DYNAMISE DES PAGES PAR JAVASCRIPT</h4>
                <p class="text-white lead"><strong>React et Vue.js</strong></p>
            </div>

            <div class="text-center">
            <h4 class="neon-yellow">VALIDATION W3C & REFERENCEMENT NATUREL SEO</h4>
                <p class="text-white lead"><strong>Accessibilité & ergonomie des pages web</strong></p>
            </div>

            <div class="text-center">
            <h4 class="neon-yellow">CONCEPTION MULTI-PLATEFORME</h4>
                <p class="text-white lead"><strong>Compatible tous supports, tablette & application mobile</strong></p>
            </div>
        </div>
    </div>
    <div class="robotIndex position-absolute top-50 end-0 translate-middle-y">
        <img src="images/robotIntro.png" alt="robot" loading="lazy" class=" img-fluid"> 
    </div>
</section>



   
    <?php include("footer.php"); ?>

    
