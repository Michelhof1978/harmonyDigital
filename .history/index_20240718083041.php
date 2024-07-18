<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("head.php"); ?>
    <meta name="description" content="">
    <title>Harmony Digital</title>

    <style>

        /* CARDS */
        /* Réduire la taille des cartes à 70% */
        /* Rapprocher les cartes en réduisant la marge */
        /* Rapprocher les cartes en utilisant des marges négatives */
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
            margin-top: -70px;
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
            left: 0;
        }

        /* Positionnez le bouton "Suivant" à droite */
        .carousel-control-next {
            right: 0;
        }


        /* Styles pour le fond binaire */
#binary-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    overflow: hidden;
    color: lime; /* Couleur des 1 et 0 */
    font-family: 'Courier New', Courier, monospace;
    opacity: 0.4;
    font-size: 10px; /* Ajustez la taille de la police si nécessaire */
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-right: 30px;
}

.star-line {
    display: flex;
    justify-content: center;
    overflow: hidden; /* Pour s'assurer que le texte ne déborde pas */
    white-space: nowrap;
}

/* CSS modifié pour ralentir l'animation binaire */
.star {
    animation: blink 10s step-start infinite; /* Augmentez cette valeur pour ralentir l'animation */
    display: inline-block;
}

@keyframes blink {
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: 0;
    }
}
/*Fin Styles pour le fond binaire */

    </style>
</head>
<body>
    
    <?php include("header.php"); ?>
    <div id="binary-background"></div>

    <div class="mt-5">
            <h1 class="border borderColor border-4 rounded  p-2 col m-2 text-center ">
                <strong class="text-white "><span class="text-orange-titre">C</span>oncepteur<span class="text-orange-titre"> D</span>e <span class="text-orange-titre">S</span>ites<span class="text-orange-titre"> I</span>nternet <span class="text-orange-titre">E</span>t<span class="text-orange-titre"> E</span>n <span class="text-orange-titre">M</span>arketing<span class="text-orange-titre"> D</span>igital</strong>
            </h1>
        </div>
    <!-- TARIFS -->
    <section  class="text-center mt-4 ms-2 me-2">
        <div>
            <h2 class="border borderColor border-4 rounded  p-2 col m-2">
                <strong class="text-white"><span class="text-orange-titre">N</span>os<span class="text-orange-titre"> P</span>réstation</strong>
            </h2>
        </div>

        <div id="tarifCarousel" class="carousel slide carousel-container">
            <div class="carousel-inner">
                <!-- Premier groupe de cartes -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <div class="card">
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
                        <div class="card">
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
                        <div class="card">
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
                        <div class="card">
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
                        <div class="card">
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
                        <div class="card">
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
<!-- Arrière plan 0 et 1 -->
<script>
        document.addEventListener("DOMContentLoaded", function() {
            const typingElement = document.querySelector('#binary-background');
            const binaryLength = 250; // Nombre de caractères à afficher
            let binaryContent = '';

            for (let i = 0; i < binaryLength; i++) {
                binaryContent += Math.round(Math.random()); // Ajoute 0 ou 1
            }

            // Ajout des lignes binaires
            for (let i = 0; i < 50; i++) {
                const line = document.createElement('div');
                line.className = 'star-line';
                for (let j = 0; j < binaryLength; j++) {
                    const char = Math.round(Math.random()); // 0 ou 1
                    const span = document.createElement('span');
                    span.textContent = char;
                    span.className = 'star';
                    span.style.animationDelay = `${Math.random() * 25}s`; // Délai d'animation aléatoire
                    line.appendChild(span);
                }
                typingElement.appendChild(line);
            }
        });
    </script>

</body>
</html>
    
