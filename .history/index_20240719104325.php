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

    <section class="d-flex ms-5">
        <div class="w-75 textIntro">
            <div class=" lead rounded shadow p-4 pb-5  rounded ms-1 me-1">
    
<div class="">
    <img src="images/intro.png" alt="site internet" loading="lazy" class="img-fluid ms-2">
    <p class="text-white ms-3">Site vitrine, corporate, évènementiel, e-commmerce adaptable mobile et tablette</p>
</div>

<div class="ms-3">
    <img src="images/intro2.png" alt="site internet" loading="lazy" class="img-fluid">
    <p class="text-white">Logos, templates Web, plaquettes publicitaires, cartes de visite, newsletters... </p>
</div>

<div class="ms-3">
    <img src="images/intro3.png" alt="site internet" loading="lazy" class="img-fluid">
    <p class="text-white">PHP ET MYSQL</p>
</div>

<div class="ms-3">
    <img src="images/intro4.png" alt="site internet" loading="lazy" class="img-fluid">
    <p class="text-white">Codage à la main respectueux des standards du web</p>
</div>

<div class="ms-3">
    <img src="images/intro5.png" alt="site internet" loading="lazy" class="img-fluid">
    <p class="text-white">React et Vue.js</p> <img src="images/robotIntro.png" alt="robot" loading="lazy" class="w- img-fluid"> 

</div>

<div class="ms-3">
    <img src="images/intro6.png" alt="site internet" loading="lazy" class="img-fluid">
    <p class="text-white">Accessibilité & ergonomie des pages web</p>
</div>

<div class="ms-3">
    <img src="images/intro7.png" alt="site internet" loading="lazy" class="img-fluid">
    <p class="text-white">Compatible tous supports, tablette & application mobile</p>
</div>

</div>
</div>
</section>


    <!-- PRESTATIONS -->
    <section class="text-center mt-4 ms-2 me-2">
        <div>
            <h2 class="border borderColor border-4 rounded p-2  m-5">
                <strong class="text-white"><span class="text-orange-titre">N</span>os<span class="text-orange-titre"> P</span>restations</strong>
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

    <?php include("footer.php"); ?>

    
