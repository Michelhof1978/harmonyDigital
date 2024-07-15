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
            opacity: 0.3;
            font-size: 20px; /* Ajustez la taille de la police si nécessaire */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .star-line {
            display: flex;
            justify-content: center;
            overflow: hidden; /* Pour s'assurer que le texte ne déborde pas */
            white-space: nowrap;
        }

        .star {
            animation: typing 5s steps(110, end) infinite;
            display: inline-block;
        }

        /* Animation pour les caractères binaires */
        @keyframes typing {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div id="binary-background"></div>
    <?php include("header.php"); ?>

    <!-- TARIFS -->
    <section id="star-container" class="text-center mt-4 ms-2 me-2">
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
                        <!-- Exemple de carte -->
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
                        <!-- Ajoutez d'autres cartes ici -->
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
        document.addEventListener('DOMContentLoaded', function() {
            const chars = '01';
            const lineCount = 30; // Nombre de lignes de lettres et chiffres
            const charsPerLine = 110; // Nombre de caractères par ligne

            const starContainer = document.getElementById('binary-background');
            if (!starContainer) return; // S'assurer que l'élément existe

            for (let i = 0; i < lineCount; i++) {
                const line = document.createElement('div');
                line.className = 'star-line';

                for (let j = 0; j < charsPerLine; j++) {
                    const char = chars.charAt(Math.floor(Math.random() * chars.length));
                    const span = document.createElement('span');
                    span.textContent = char;
                    span.className = 'star';
                    span.style.animationDelay = `${Math.random() * 5}s`; // Délai d'animation aléatoire
                    line.appendChild(span);
                }

                starContainer.appendChild(line); // Ajouter la ligne au conteneur
            }
        });
    </script>
</body>
</html>
