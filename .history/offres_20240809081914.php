<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("head.php"); ?>
    <meta name="informations" content="Informations sur nos services et processus">
    <title>Infos</title>
  
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
            opacity: 0.9;
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


<!-- OFFRES DESKTOP -->
<div class="d-none d-md-block">
    <div class="mt-5">
        <h1 class="border borderColor border-4 rounded p-2 col m-4 text-center">
            <strong class="text-white">Nos Offres</strong>
        </h1>
    </div>

    <section class="container">
        <p class="lead text-white text-center fs-5 mt-5 mb-5 fw-bold">
            Du concept à sa réalisation et au-delà, <span style="color: #e06717e4 ;">Harmony Digital </span> s’appuie sur son approche SMART et innovante pour vous accompagner dans votre démarche de transformation digitale : penser et designer les solutions, les développer, les maintenir et les faire évoluer selon vos besoins et là où vous en êtes <br>
            <span style="color: #e06717e4 ;">UX</span> (User Experience) et <span style="color: #e06717e4 ;">CX</span> (Customer Experience) sont au cœur de notre politique d’Innovation !
        </p>
    </section>

    <section class="container mb-5">
        <div class="row">
            <div class="col-4">
                <img src="images/robotinfo1.png" alt="robot" loading="lazy" class="img-fluid w-50 mt-3">
            </div>
            <div class="col-8">
                <p class="lead text-white text-center fw-bold fs-5 mt-5">
                    L’expert métier, c’est vous !<br> L’expert tech and agile, c’est nous ! <br>
                    Ensemble, nous donnerons vie à vos projets, du concept à l’hébergement dans le cloud et au-delà. <br>
                    <span style="color: #e06717e4 ;">Laissez-nous vous simplifier la vie !</span>
                </p>
            </div>
        </div>
    </section>

    <section class="container mt-4">
        <div class="row">
            <div class="col-8">
                <p class="lead text-white text-center fw-bold fs-5 mt-5 borderColor p-3">
                    Vous avez déjà démarré la digitalisation de vos process mais vous souhaitez être conseillés et accompagnés ?<br>
                    Nous vous proposons notre expertise et notre approche SMART pour faire de votre projet un succès ! <br>
                    Audit technique, accompagnement personnalisé et coaching,…
                </p>
            </div>
            <div class="col-4">
                <img src="images/robotinfo2.png" alt="robot" loading="lazy" class="img-fluid w-50 mt-3">
            </div>
        </div>
    </section>

    <section class="container mt-5 mb-5">
        <div class="row">
            <div class="col-4">
                <img src="images/robotinfo3.png" alt="robot" loading="lazy" class="img-fluid w-50 mt-3">
            </div>
            <div class="col-8">
                <p class="lead text-white text-center fw-bold fs-5 mt-5">
                De <span style="color: #e06717e4 ;">l’idée à sa réalisation</span>, Harmony Digital s’appuie sur ses valeurs de transparence, de bienveillance et d’innovation pour accompagner ses clients d’un bout à l’autre de leur démarche de transformation digitale : penser et designer la solution, la développer, la maintenir et la faire évoluer.<br><br>
                En tant que smart, nous proposons une approche 360 de la transformation numérique qui va projeter le client au cœur de l’innovation dans son propre projet, le tout dans une relation de partenariat <span style="color: #e06717e4 ;">Agile et bienveillante</span>.
                </p>
            </div>
        </div>
    </section>

    <section class="container mt-4 mb-5">
        <div class="row">
            <div class="col-8">
                <p class="lead text-white text-center fw-bold fs-5 mt-5 borderColor p-3">
                Notre équipe est à votre écoute et passe à l’action dès notre premier contact. <br>
                Plusieurs échanges sont d’emblée programmés, le but étant d’appréhender au mieux votre besoin et vos problématiques par la collecte et l’analyse d’informations.<br>
                Notre Product Owner Michel fera le lien entre toutes les parties investies dans le projet, dès le premier jour. <br>Il sera votre référent tout au long de notre collaboration.
                </p>
            </div>
            <div class="col-4">
                <img src="images/robotinfo4.png" alt="robot" loading="lazy" class="img-fluid w-50 mt-3">
            </div>
        </div>
    </section>

    <div class="text-center mb-5">
        <img src="images/robotinfo5.png" alt="robot" loading="lazy" class="img-fluid w-75 mt-3">
    </div>
</div>
<!-- FIN OFFRES DESKTOP -->


<!-- OFFRES MOBILE -->
<div class="d-block d-md-none">
    <div class="mt-5 mb-5">
        <h1 class="border borderColor border-4 rounded p-2 col m-4 text-center">
            <strong class="text-white">Nos Offres</strong>
        </h1>
    </div>

    <section class="container">
        <p class="lead text-white text-center fs-6 mt-4 mb-4 fw-bold">
            Du concept à sa réalisation et au-delà, <span style="color: #e06717e4 ;">Harmony Digital</span> s’appuie sur son approche SMART et innovante pour vous accompagner dans votre démarche de transformation digitale : penser et designer les solutions, les développer, les maintenir et les faire évoluer selon vos besoins et là où vous en êtes <br>
        </p>
        <p mt-3 lead text-center fw-bold style="color: #e06717e4 ;">UX</span> (User Experience) et <span style="color: #e06717e4 ;">CX</span> (Customer Experience) sont au cœur de notre politique d’Innovation !        </p>


    </section>

    <section class="container mb-4">
        <div class="row">
            <div class="col-12 text-center">
                <img src="images/robotinfo1.png" alt="robot" loading="lazy" class="img-fluid w-25 mt-3">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="lead text-white text-center fw-bold fs-6 mt-4">
                    L’expert métier, c’est vous !<br> L’expert tech and agile, c’est nous ! <br>
                    Ensemble, nous donnerons vie à vos projets, du concept à l’hébergement dans le cloud et au-delà. <br>
                </p>
                <p class="mt-3 lead text-center fw-bold" style="color: #e06717e4 ;">Laissez-nous vous simplifier la vie !</p>

            </div>
        </div>
    </section>

    <section class="container mb-4">
        <div class="row">
            <div class="col-12">
                <p class="lead text-white text-center fw-bold fs-6 mt-4 borderColor p-3">
                    Vous avez déjà démarré la digitalisation de vos process mais vous souhaitez être conseillés et accompagnés ?<br>
                    Nous vous proposons notre expertise et notre approche SMART pour faire de votre projet un succès ! <br>
                    Audit technique, accompagnement personnalisé et coaching,…
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img src="images/robotinfo2.png" alt="robot" loading="lazy" class="img-fluid w-25 mt-3">
            </div>
        </div>
    </section>

    <section class="container mb-4">
        
        <div class="row">
            <div class="col-12">
                <p class="lead text-white text-center fw-bold fs-6 mt-4">
                De <span style="color: #e06717e4 ;">l’idée à sa réalisation</span>, Harmony Digital s’appuie sur ses valeurs de transparence, de bienveillance et d’innovation pour accompagner ses clients d’un bout à l’autre de leur démarche de transformation digitale : penser et designer la solution, la développer, la maintenir et la faire évoluer.<br><br>
                En tant que smart, nous proposons une approche 360 de la transformation numérique qui va projeter le client au cœur de l’innovation dans son propre projet, le tout dans une relation de partenariat <span style="color: #e06717e4 ;">Agile et bienveillante</span>.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img src="images/robotinfo3.png" alt="robot" loading="lazy" class="img-fluid w-25 mt-3">
            </div>
        </div>
    </section>

    <section class="container mb-4">
        <div class="row">
            <div class="col-12">
                <p class="lead text-white text-center fw-bold fs-6 mt-4 borderColor p-3">
                Notre équipe est à votre écoute et passe à l’action dès notre premier contact. <br>
                Plusieurs échanges sont d’emblée programmés, le but étant d’appréhender au mieux votre besoin et vos problématiques par la collecte et l’analyse d’informations.<br>
                Notre Product Owner Michel fera le lien entre toutes les parties investies dans le projet, dès le premier jour. <br>Il sera votre référent tout au long de notre collaboration.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img src="images/robotinfo4.png" alt="robot" loading="lazy" class="img-fluid w-25 mt-3">
            </div>
        </div>
    </section>

    <div class="text-center mb-4">
        <img src="images/robotinfo5.png" alt="robot" loading="lazy" class="img-fluid w-75 mt-3">
    </div>
</div>
<!-- FIN OFFRES MOBILE -->

<!-- OFFRES MOBILE -->

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
