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

        /* Styles pour le fond binaire */
        #binary-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
            color: lime;
            font-family: 'Courier New', Courier, monospace;
            opacity: 0.4;
            font-size: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .star-line {
            display: flex;
            justify-content: center;
            overflow: hidden;
            white-space: nowrap;
        }

        .star {
            display: inline-block;
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>
    <div id="binary-background"></div>

    <div class="mt-5">
        <h1 class="border borderColor border-4 rounded p-2 col m-2 text-center">
            <strong class="text-white"><span class="text-orange-titre">C</span>oncepteur<span class="text-orange-titre"> D</span>e <span class="text-orange-titre">S</span>ites<span class="text-orange-titre"> I</span>nternet <span class="text-orange-titre">E</span>t<span class="text-orange-titre"> E</span>n <span class="text-orange-titre">M</span>arketing<span class="text-orange-titre"> D</span>igital</strong>
        </h1>
    </div>

    <!-- TARIFS -->
    <section class="text-center mt-4 ms-2 me-2">
        <div>
            <h2 class="border borderColor border-4 rounded p-2 col m-2">
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
            const lineCount = 50; // Nombre de lignes

            function createBinaryLine() {
                const line = document.createElement('div');
                line.className = 'star-line';
                return line;
            }

            function addCharacterToLine(line, char, delay) {
                const span = document.createElement('span');
                span.textContent = char;
                span.className = 'star';
                span.style.animationDelay = `${delay}s`; // Délai d'animation aléatoire
                line.appendChild(span);
            }

            function typeBinaryLine(line, delay) {
                for (let j = 0; j < binaryLength; j++) {
                    const char = Math.round(Math.random()); // 0 ou 1
                    setTimeout(() => addCharacterToLine(line, char, Math.random() * 25), j * 50); // Ajoute un caractère toutes les 50 ms
                }
            }

            for (let i = 0; i < lineCount; i++) {
                const line = createBinaryLine();
                typingElement.appendChild(line);
                setTimeout(() => typeBinaryLine(line, Math.random() * 25), i * 1000); // Ajoute une nouvelle ligne toutes les secondes
            }
        });
    </script>
</body>
</html>
