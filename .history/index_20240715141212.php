<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("head.php"); ?>
    <meta name="description" content="">
    <title>Harmony Digital</title>

    <style>
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
            opacity: 0.9;
            font-size: 15px; /* Augmenter la taille de la police pour plus de visibilité */
            display: flex;
            flex-direction: column;
            padding: 100px 0; /* Augmenter le padding pour plus d'espace */
        }

        .star-line {
            display: flex;
            justify-content: center;
            overflow: hidden; /* Pour s'assurer que le texte ne déborde pas */
            white-space: nowrap;
            margin-bottom: 20px; /* Plus d'espace entre les lignes */
        }

        .star {
            animation: blink 5s step-start infinite; /* Rendre l'animation plus lente */
            display: inline-block;
        }

        /* Animation pour les caractères binaires */
        @keyframes blink {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
        }

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
            margin-bottom: 80px; /* Ajoutez une marge inférieure pour compenser la hauteur des boutons */
        }

        .carousel-container {
            position: relative; /* Positionnement relatif pour que les boutons soient positionnés par rapport à ce conteneur */
            padding: 20px; /* Ajoutez un peu de rembourrage pour éviter que les boutons ne soient collés aux bords */
        }

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

        .carousel-control-prev {
            left: 0;
        }

        .carousel-control-next {
            right: 0;
        }
    </style>
</head>
<body>
    <div id="binary-background"></div>
    <?php include("header.php"); ?>

    <!-- TARIFS -->
    <section class="text-center mt-4 ms-2 me-2">
        <div>
            <h4 class="mb-5 border borderColor border-5 rounded display-6 p-2 col m-2 text-white">
                <strong>Nos Tarifs</strong>
            </h4>
        </div>

        <div id="tarifCarousel" class="carousel slide carousel-container">
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const typingElement = document.querySelector('#binary-background');
            const binaryLength = 150; // Nombre de caractères à afficher
            let binaryContent = '';

            for (let i = 0; i < binaryLength; i++) {
                binaryContent += Math.round(Math.random()); // Ajoute 0 ou 1
            }

            // Ajout des lignes binaires
            for (let i = 0; i < 30; i++) {
                const line = document.createElement('div');
                line.className = 'star-line';
                for (let j = 0; j < binaryLength; j++) {
                    const char = Math.round(Math.random()); // 0 ou 1
                    const span = document.createElement('span');
                    span.textContent = char;
                    span.className = 'star';
                    span.style.animationDelay = `${Math.random() * 2}s`; // Délai d'animation aléatoire
                    line.appendChild(span);
                }
                typingElement.appendChild(line);
            }
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script>
    particlesJS('binary-background', {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#00FF00"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 4,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": false,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 3,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": false,
                    "mode": "push"
                },
                "resize": true
            }
        },
        "retina_detect": true
    });
</script>



</body>
</html>


    

    