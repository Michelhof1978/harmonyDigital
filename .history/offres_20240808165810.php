<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("head.php"); ?>
    <meta name="informations" content="">
    <title></title>
  
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
   
    <?php include("header.php"); ?>

    <div id="binary-background3"></div>

    <div class="container ">
    <!--Section INTRO-->

    <div class="row ">

      <div class="col-sm-12 col-xl-6 ">
        <img src="../images/bannerIntro.webp" alt="Le Pal" loading="lazy" class="img-fluid rounded-2">
      </div>

      <div class="col-sm-12 col-xl-6 ">
        <p class=" lead bg-light rounded shadow p-4 pb-5 bg-white rounded ms-1 me-1 ">
          Profitez d'une expérience de camping unique au <strong> <a href="<?php echo CAMPING_URL; ?>" target="_blank">Camping proche du Pal de Dompierre Sur Besbre</a>, situé à proximité du parc d'attractions <a href="<?php echo PAL_URL; ?>" target="_blank">Le-Pal</a></strong>.
          Niché dans un cadre naturel exceptionnel en bordure d'une rivière et à proximité des commerces, ce site paisible et verdoyant offre une atmosphère propice à la détente et au ressourcement.

          Vous serez enchanté par l'ambiance caravane proposée par notre équipe. Des caravanes tout confort et entièrement équipées sont disponibles du <strong>01/07/2024 au 25/08/2024</strong> pour accueillir 4 personnes chacune (2 adultes et 2 enfants).
          En outre, une épicerie de base est fournie, comprenant café, sucre, sel, poivre, huile, etc.

          Notre équipe, dirigée par Isabelle, se fera un plaisir de vous aider à rendre votre séjour inoubliable. N'hésitez pas à nous contacter pour plus d'informations ou pour réserver votre séjour dès maintenant.
        <strong>Le linge de lit n'est pas inclus</strong>
        </p>
      </div>
    </div>



  </div>
</section>

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


    

    