<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("head.php"); ?>
    <meta name="description" content="Nous sommes votre partenaire de confiance pour la création de sites web professionnels. Notre équipe vous aide à concevoir des sites web attrayants et fonctionnels qui répondent à vos besoins spécifiques et optimisent votre présence en ligne.">
    <title>Conception de Sites Web de Qualité | Création Professionnelle & Optimisation SEO</title>
  
  <style>
     /* Fond 0 et 1 index */
#binary-background3 {
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
    <div id="binary-background3"></div>
    <?php include("header.php"); ?>

    <!-- PRESTATIONS CAROUSEL CARD DESKTOP-->
<section class="text-center ms-2 me-2 d-none d-md-block"> <!-- Affiche uniquement sur desktop -->
    <div>
        <h2 class="border borderColor border-4 rounded p-2 mb-4">
            <strong class="text-white">Nos Prestations</strong>
        </h2>
        <p class="text-white lead fs-2 fw-bold">
            Des solutions sur mesure pour satisfaire vos besoins.
        </p>
    </div>

    <div id="tarifCarousel" class="carousel slide carousel-container mt-1">
        <div class="carousel-inner">
            <!-- Premier groupe de cartes -->
            <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                    <div class="card mt-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card1.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 890,00 €</strong>
                        <div class="card-body">
                            <a href=".php" class="info btn text-white mb-4">Plus d'infos !</a>
                        </div>
                    </div>

                    <div class="card mt-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card2.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 790,00 €</strong>
                        <div class="card-body">
                            <a href=".php" class="info btn text-white mb-4">Plus d'infos !</a>
                        </div>
                    </div>

                    <div class="card mt-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card3.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 125,00 €</strong>
                        <div class="card-body">
                            <a href=".php" class="info btn text-white mb-4">Plus d'infos !</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deuxième groupe de cartes -->
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <div class="card mt-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card4.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 750,00 €</strong>
                        <div class="card-body">
                            <a href=".php" class="info btn text-white mb-4">Plus d'infos !</a>
                        </div>
                    </div>

                    <div class="card mt-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card5.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 350,00 €</strong>
                        <div class="card-body">
                            <a href=".php" class="info btn text-white mb-4">Plus d'infos !</a>
                        </div>
                    </div>

                    <div class="card mt-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="images/card6.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            <p class="textcard card-text text-white"></p>
                        </div>
                        <strong class="pricecard text-white custom-animation mb-5">À partir de 250,00 €</strong>
                        <div class="card-body">
                            <a href=".php" class="info btn text-white mb-4">Plus d'infos !</a>
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
<!-- FIN PRESTATIONS CAROUSEL CARD DESKTOP-->

    <?php include("footer.php"); ?>
<script>
  const numParticles = 100; // Nombre total de particules
const binaryBackground = document.getElementById('binary-background3');
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


    

    