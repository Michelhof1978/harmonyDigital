
<?php include("head.php"); ?>
<meta name="description" content="Découvrez comment notre entreprise fonctionne : de la conception de votre site web à la mise en œuvre de stratégies de marketing digital, SEO, et design de logos. Apprenez-en plus sur notre processus de travail collaboratif, transparent et efficace.">
<title>Informations - Processus de Travail</title>

<meta property="og:url" content="https://harmony-digital.fr/infos">
    <!-- Canonical Link -->
    <link rel="canonical" href="https://harmony-digital.fr/infos">

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
    animation: move 25s linear infinite; /* Valeur par défaut, peut être remplacée en JavaScript */
}

@keyframes move {
    0% {
        transform: translate(0, 0);
    }
    25% {
        transform: translate(calc(100vw - 10px), 0); /* Ajuste 10px selon la taille de la particule */
    }
    50% {
        transform: translate(calc(100vw - 10px), calc(100vh - 10px));
    }
    75% {
        transform: translate(0, calc(100vh - 10px));
    }
    100% {
        transform: translate(0, 0);
    }
}

    </style>
</head>
    
    <?php include("header.php"); ?>

    <div id="binary-background"></div>

    <!-- Banner mobile -->
    <div class="container-fluid d-flex justify-content-center align-items-center full-height mt-5 d-none d-md-flex">
    <img src="images/banniererobotinfos.webp" alt="Bannière illustration de bienvenue avec un robot" class="img-fluid w-50 rounded">
</div>
<!--Fin Banner mobile -->

 <!--Banner desktop -->
<div class="container-fluid d-flex justify-content-center align-items-center full-height mt-5  d-md-none">
    <img src="images/banniererobotinfos.webp" alt="Bannière illustration de bienvenue avec un robot" class="img-fluid w-100 rounded">
</div>
 <!--Fin Banner desktop -->

 <img src="images/gif3.gif" alt="robot gif" class="img-fluid d-block d-md-none" style="margin-bottom: -43px;">

<img src="images/gif3.gif" alt="robot gif" class="img-fluid d-none d-md-block" style="margin-bottom: -43px; margin-left: 150px;">

<!-- OFFRES DESKTOP -->
<div class="d-none d-md-block">
    <div class="mt-5">
        <h1 class="border borderColor border-4 rounded p-2 col m-4 text-center text-white fw-bold">
            Informations
        </h1>
    </div>

    <div class="container">
    <p class="lead text-white text-center fs-5 mt-5 mb-5 fw-bold">
        Du concept à sa réalisation et au-delà, <span style="color: #e06717e4;">Harmony Digital</span> s’appuie sur son approche 
        <a href="<?php echo SMART; ?>" style="color: #e06717e4;" target="_blank">SMART</a> 
        et innovante pour vous accompagner dans votre démarche de transformation digitale : penser et designer les solutions, les développer, les maintenir et les faire évoluer selon vos besoins et là où vous en êtes <br>
        <a href="<?php echo UX; ?>" style="color: #e06717e4;" target="_blank">UX</a> (User Experience) et 
        <a href="<?php echo CX; ?>" style="color: #e06717e4;" target="_blank">CX</a> 
        (Customer Experience) sont au cœur de notre politique d’Innovation !
    </p>
</div>


    <div class="container mb-5">
        <div class="row">
            <div class="col-4">
                <img src="images/robotinfo1.webp" alt="robot illustratif" loading="lazy" class="img-fluid w-50 mt-3">
            </div>
            <div class="col-8">
            <p class="lead text-white text-center fw-bold fs-5 mt-5">
    L’expert métier, c’est vous !<br> 
    L’expert <a href="<?php echo AGILE; ?>" style="color: #e06717e4;" target="_blank">tech and agile</a>, c’est nous ! <br>
    Ensemble, nous donnerons vie à vos projets, du concept à l’hébergement dans le cloud et au-delà. <br>
    <span style="color: #e06717e4;">Laissez-nous vous simplifier la vie !</span>
</p>


            </div>
        </div>
</div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-8">
                <p class="lead text-white text-center fw-bold fs-5 mt-5 borderColor p-3">
                    Vous avez déjà démarré la digitalisation de vos process mais vous souhaitez être conseillés et accompagnés ?<br>
                    Nous vous proposons notre expertise et notre approche SMART pour faire de votre projet un succès ! <br>
                    Audit technique, accompagnement personnalisé et coaching,…
                </p>
            </div>
            <div class="col-4">
                <img src="images/robotinfo2.webp" alt="robot illustratif" loading="lazy" class="img-fluid w-50 mt-3">
            </div>
        </div>
</div>

<!-- ROBOT VIDEO DESKTOP -->
<div class="container-fluid px-0 mb-5 d-none d-md-block mt-5">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="video-container" style="max-width: 50%; margin: auto;">
            <video autoplay loop muted playsinline class="rounded w-100">
                <source src="videos/robotpresentation3.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la balise <code>video</code>.
            </video>
        </div>
    </div>
</div>
<!-- FIN ROBOT VIDEO DESKTOP-->

<!-- ROBOT VIDEO MOBILE -->
<div class="container-fluid px-0 mb-5 d-block d-md-none">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="video-container" style="width: 100%;">
            <!-- Même configuration pour la version mobile -->
            <video autoplay loop muted playsinline class="rounded w-100">
                <source src="videos/robotpresentation3.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la balise <code>video</code>.
            </video>
        </div>
    </div>
</div>
<!-- FIN ROBOT VIDEO MOBILE -->

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-4">
                <img src="images/robotinfo3.webp" alt="robot illustratif" loading="lazy" class="img-fluid w-50 mt-3">
            </div>
            <div class="col-8">
                <p class="lead text-white text-center fw-bold fs-5 mt-5">
                De <span style="color: #e06717e4 ;">l’idée à sa réalisation</span>, Harmony Digital s’appuie sur ses valeurs de transparence, de bienveillance et d’innovation pour accompagner ses clients d’un bout à l’autre de leur démarche de transformation digitale : penser et designer la solution, la développer, la maintenir et la faire évoluer.<br><br>
                En tant que smart, nous proposons une approche 360 de la transformation numérique qui va projeter le client au cœur de l’innovation dans son propre projet, le tout dans une relation de partenariat <span style="color: #e06717e4 ;">Agile et bienveillante</span>.
                </p>
            </div>
        </div>
</div>

    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col-8">
                <p class="lead text-white text-center fw-bold fs-5 mt-5 borderColor p-3">
                Notre équipe est à votre écoute et passe à l’action dès notre premier contact. <br>
                Plusieurs échanges sont d’emblée programmés, le but étant d’appréhender au mieux votre besoin et vos problématiques par la collecte et l’analyse d’informations.<br>
                Notre Product Owner fera le lien entre toutes les parties investies dans le projet, dès le premier jour et jusqu'à la fin du projet. <br>Il sera votre seul référent tout au long de notre collaboration.
                </p>
            </div>
            <div class="col-4">
                <img src="images/robotinfo4.webp" alt="robot illustratif" loading="lazy" class="img-fluid w-50 mt-3">
            </div>
        </div>
</div>

</div>
<!-- FIN OFFRES DESKTOP -->


<!-- OFFRES MOBILE -->
<div class="d-block d-md-none">
    <div class="mt-5 mb-5">
        <h1 class="border borderColor border-4 rounded p-2 col m-4 text-center text-white bw-bold">
            Informations
        </h1>
    </div>

    <div class="container">
        <p class="lead text-white text-center fs-6 mt-4 mb-4 fw-bold">
            Du concept à sa réalisation et au-delà, <span style="color: #e06717e4 ;">Harmony Digital</span> s’appuie sur son approche SMART et innovante pour vous accompagner dans votre démarche de transformation digitale : penser et designer les solutions, les développer, les maintenir et les faire évoluer selon vos besoins et là où vous en êtes <br>
        </p>

        <p class="lead text-white text-center fs-6 mt-4 mb-4 fw-bold">
            <span style="color: #e06717e4 ;">UX</span> (User Experience) et <span style="color: #e06717e4 ;">CX</span> (Customer Experience) sont au cœur de notre politique d’Innovation !
        </p>
</div>

    <div class="container mb-4">
        <div class="row">
            <div class="col-12 text-center">
                <img src="images/robotinfo1.webp" alt="robot illustratif" loading="lazy" class="img-fluid w-25 mt-3">
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
</div>

    <div class="container mb-4">
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
                <img src="images/robotinfo2.webp" alt="robot illustratif" loading="lazy" class="img-fluid w-25 mt-3">
            </div>
        </div>
</div>

    <div class="container mb-4">
        
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
                <img src="images/robotinfo3.webp" alt="robot illustratif" loading="lazy" class="img-fluid w-25 mt-3">
            </div>
        </div>
</div>

    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <p class="lead text-white text-center fw-bold fs-6 mt-4 borderColor p-3">
                Notre équipe est à votre écoute et passe à l’action dès notre premier contact. <br>
                Plusieurs échanges sont d’emblée programmés, le but étant d’appréhender au mieux votre besoin et vos problématiques par la collecte et l’analyse d’informations.<br>
                Notre Product Owner fera le lien entre toutes les parties investies dans le projet, dès le premier jour. <br>Il sera votre référent tout au long de notre collaboration.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img src="images/robotinfo4.webp" alt="robot illustratif" loading="lazy" class="img-fluid w-25 mt-3">
            </div>
        </div>
</div>
</div>
<!-- FIN OFFRES MOBILE -->

<!-- ROBOT VIDEO DESKTOP -->
<div class="container-fluid px-0 mb-5 d-none d-md-block">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="video-container" style="max-width: 50%; margin: auto;">
            <!-- La vidéo se lit automatiquement, en boucle, sans son, et est compatible avec le mode plein écran -->
            <video autoplay loop muted playsinline class="rounded w-100">
                <source src="videos/robotParle2.mp4" type="video/mp4">
                <!-- Message affiché si la balise video n'est pas supportée par le navigateur -->
                Votre navigateur ne supporte pas la balise <code>video</code>.
            </video>
        </div>
    </div>
</div>
<!-- FIN ROBOT VIDEO DESKTOP-->

<!-- ROBOT VIDEO MOBILE -->
<div class="container-fluid px-0 mb-5 d-block d-md-none">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh; margin-top:-50px; margin-bottom:-100px;">
        <div class="video-container" style="width: 100%;">
            <!-- Même configuration pour la version mobile -->
            <video autoplay loop muted playsinline class="rounded w-100">
                <source src="videos/robotParle2.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la balise <code>video</code>.
            </video>
        </div>
    </div>
</div>
<!-- FIN ROBOT VIDEO MOBILE -->

<div class="text-center mb-4">
        <img src="images/robotinfo5.webp" alt="robot illustratif" loading="lazy" class="img-fluid w-50 mt-3">
    </div>
    
    <?php include("footer.php"); ?>


    <!-- FOND BINAIRE -->
    <script>
document.addEventListener('DOMContentLoaded', () => {
    const numParticles = 100; // Nombre total de particules
    const binaryBackground = document.getElementById('binary-background');
    const characters = ['0', '1']; // Chiffres 0 et 1

    function createParticle() {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.textContent = characters[Math.floor(Math.random() * characters.length)];
        particle.style.left = `${Math.random() * 100}vw`;
        particle.style.top = `${Math.random() * 100}vh`;

        // Définir une animation unique pour chaque particule
        const duration = Math.random() * 30 + 5; // Durée entre 25s et 55s
        particle.style.animation = `move ${duration}s linear infinite`;
        
        binaryBackground.appendChild(particle);
    }

    function initializeParticles() {
        binaryBackground.innerHTML = '';
        for (let i = 0; i < numParticles; i++) {
            createParticle();
        }
    }

    // Initialise les particules lors du chargement de la page
    initializeParticles();

    // Utilise un debounce pour améliorer la performance lors du redimensionnement
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(initializeParticles, 200); // Délai de 200ms avant de réinitialiser
    });
});
</script>

</body>
</html>
