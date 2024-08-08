<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("head.php"); ?>
    <meta name="informations" content="">
    <title>Votre Titre</title>
  
    <style>
        /* Fond 0 et 1 index */
        #binary-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            color: lime;
            font-family: 'Courier New', Courier, monospace;
            font-size: 10px; /* Augmente la taille pour une meilleure visibilité */
            white-space: nowrap;
            opacity: 0.6;
        }

        @keyframes move {
            0% {
                transform: translate(0, 0);
            }
            25% {
                transform: translate(calc(100vw - 24px), 0); /* 24px est la largeur approximative du caractère */
            }
            50% {
                transform: translate(calc(100vw - 24px), calc(100vh - 24px));
            }
            75% {
                transform: translate(0, calc(100vh - 24px));
            }
            100% {
                transform: translate(0, 0);
            }
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>

    <div id="binary-background"></div>

    <div class="mt-5">
    <h1 class="border borderColor border-4 rounded p-2 col m-4 text-center">
        <strong class="text-white">Nos Offres</strong>
    </h1>
</div>


    <section class="container">
       
        <div class="row">
            <div class="col-4">
                <img src="images/robotinfo1.png" alt="robot" loading="lazy" class="img-fluid w-50 mt-3">
            </div>
            <div class="col-8">
                <p class="lead text-white text-center fw-bold fs-5 mt-5">
                    L’expert métier, c’est vous ! L’expert tech and agile, c’est nous ! <br>
                    Ensemble, nous donnerons vie à vos projets, du concept à l’hébergement dans le cloud et au-delà. <br>
                    Laissez-nous vous simplifier la vie !
                </p>
            </div>
        </div>
    </section>

    <section class="container">
       
        <div class="row">
            
            <div class="col-8">
                <p class="lead text-white text-center fw-bold fs-5 mt-5">
                    L’expert métier, c’est vous ! L’expert tech and agile, c’est nous ! <br>
                    Ensemble, nous donnerons vie à vos projets, du concept à l’hébergement dans le cloud et au-delà. <br>
                    Laissez-nous vous simplifier la vie !
                </p>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>

    <script>
        const numParticles = 100; // Nombre total de particules
        const binaryBackground = document.getElementById('binary-background');
        const characters = ['0', '1'];

        function createParticle() {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.textContent = characters[Math.floor(Math.random() * characters.length)];
            particle.style.left = `${Math.random() * 100}vw`;
            particle.style.top = `${Math.random() * 100}vh`;
            
            // Définir une animation unique pour chaque particule
            particle.style.animation = `move ${Math.random() * 30 + 25}s linear infinite`;
            
            binaryBackground.appendChild(particle);
        }

        for (let i = 0; i < numParticles; i++) {
            createParticle();
        }

        window.addEventListener('resize', () => {
            binaryBackground.innerHTML = '';
            for (let i = 0; i < numParticles; i++) {
                createParticle();
            }
        });
    </script>
</body>
</html>
