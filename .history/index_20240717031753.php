<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony Digital</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .carousel-item .card {
            flex: 1 0 45%;
            margin: 10px;
        }
        @media (min-width: 768px) {
            .carousel-item .card {
                flex: 1 0 30%;
            }
        }
        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #e06717e4;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div id="binary-background"></div>
    <section class="text-center mt-4 ms-2 me-2">
        <div>
            <h4 class="border borderColor border-5 rounded display-6 p-2 col m-2">
                <strong class="text-white"><span class="text-orange-titre">N</span>os<span class="text-orange-titre"> T</span>arifs</strong>
            </h4>
        </div>

        <div id="tarifCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
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
                <div class="carousel-item">
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
                <div class="carousel-item">
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
            <a class="carousel-control-prev" href="#tarifCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="carousel-control-next" href="#tarifCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </section>

    <?php include("footer.php"); ?>

    
