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
        }

        /* CAROUSSEL */
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

        /* Media queries pour les appareils mobiles */
        @media (max-width: 768px) {
            .card {
                transform: scale(1);
                flex: 1 0 45%;
                box-sizing: border-box;
                margin: 10px;
            }

            .carousel-inner .d-flex {
                flex-wrap: wrap;
                justify-content: space-around;
                margin-bottom: 80px;
            }

            .carousel-inner .d-flex > .card:first-child,
            .carousel-inner .d-flex > .card:last-child {
                margin: 10px;
            }

            .carousel-control-prev,
            .carousel-control-next {
                width: 30px;
                height: 30px;
                margin-top: -35px;
            }
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>
    <div id="binary-background"></div>
    <section class="text-center mt-4 ms-2 me-2">
        <div>
            <h4 class="border borderColor border-5 rounded display-6 p-2 col m-2">
                <strong class="text-white"><span class="text-orange-titre">N</span>os<span class="text-orange-titre"> T</span>arifs</strong>
            </h4>
        </div>

        <div id="tarifCarousel" class="carousel slide carousel-container">
            <div class="carousel-inner">
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
            </div>

            <button class="carousel-control-prev" type="button" data-mdb-target="#tarifCarousel" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#tarifCarousel" data-mdb-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </section>
    <?php include("footer.php"); ?>
    
</body>
</html>
