<footer class="container-fluid bg-dark">
  <div class="row">
    <div class="img3 col-12 pt-3">
      <img class="img2" src="../images/logo.webp" loading="lazy" alt="logo">
      <p class="copyright d-flex flex-wrap text-sm justify-content-center">
        Site réalisé par &nbsp; 
        <a href="<?php echo AUTHOR_URL; ?>" target="_blank">
          <strong>Michel Hoffmann - Harmony Digital</strong>
        </a>
      </p>
      <div class="mb-2">
        <!-- Linkedin -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="<?php echo LINKEDIN_URL; ?>" target="_blank" role="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
          </svg>
        </a>
        <!-- Github -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="<?php echo GITHUB_URL; ?>" target="_blank" role="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.292 6.532 5.47 7.59.4.074.547-.172.547-.385 0-.19-.007-.693-.01-1.36-2.226.483-2.695-1.073-2.695-1.073-.364-.923-.89-1.168-.89-1.168-.727-.497.055-.487.055-.487.803.057 1.226.825 1.226.825.715 1.223 1.873.87 2.33.665.073-.517.28-.87.508-1.07-1.776-.202-3.644-.888-3.644-3.95 0-.872.31-1.587.823-2.146-.083-.203-.357-1.018.078-2.12 0 0 .67-.215 2.2.82A7.655 7.655 0 0 1 8 4.572c.68.003 1.366.092 2.006.272 1.53-1.035 2.198-.82 2.198-.82.436 1.102.162 1.917.08 2.12.513.559.822 1.274.822 2.146 0 3.071-1.87 3.746-3.654 3.944.287.246.543.73.543 1.473 0 1.062-.01 1.92-.01 2.182 0 .214.145.462.55.384C13.708 14.532 16 11.54 16 8c0-4.42-3.58-8-8-8z"/>
          </svg>
        </a>
      </div>
    </div>
    <div class="text-center mb-5">
      <p class="text-center" style="color: white;">
        <strong>Harmony Digital
          <a href="#" target="_blank">"</a> - 03 290 Dompierre Sur Besbre
        </strong>
      </p>
      <p>
        <a href="mentionsLegales.php">Mentions Légales</a> &nbsp;&nbsp;&nbsp;
        <a href="politiquedeConfidentialite.php">Politique De Confidentialité</a>&nbsp;&nbsp;&nbsp;
        <a href="conditionsGeneralesDeVente.php">CGV</a>
      </p>
    </div>
  </div>
  </div>
</footer>




<!-- _____________________________________________________________________________________ -->

<!-- Scripts JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js" async></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" async></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   
<!-- _____________________________________________________________________________________ -->
<!-- Arrière plan 0 et 1 -->
<script>
        document.addEventListener("DOMContentLoaded", function() {
            const typingElement = document.querySelector('#binary-background');
            const binaryLength = 500; // Nombre total de caractères binaires à afficher
            const characters = [];

            // Créez des éléments span pour chaque caractère binaire
            for (let i = 0; i < binaryLength; i++) {
                const char = document.createElement('span');
                char.textContent = Math.round(Math.random());
                char.className = 'star';
                char.style.left = Math.random() * 100 + 'vw';
                char.style.top = Math.random() * 100 + 'vh';
                char.style.animationDelay = `${Math.random() * 5}s`; // Délai d'animation aléatoire pour chaque caractère
                typingElement.appendChild(char);
                characters.push(char);
            }

            // Fonction pour afficher les caractères un par un
            function showCharacters(index) {
                if (index < characters.length) {
                    characters[index].style.opacity = 1;
                    setTimeout(() => showCharacters(index + 1), 200); // Ajustez la durée pour la vitesse souhaitée
                }
            }

            showCharacters(0);
        });
    </script>



<!-- _____________________________________________________________________________________ -->

<!-- Balisage JSON-LD généré par l'outil d'aide au balisage de données structurées de Google -->
<!-- En utilisant ce balisage, les moteurs de recherche et d'autres agents intelligents peuvent mieux comprendre et interpréter les informations liées à l'entreprise sur la page web. -->
<!-- <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "LocalBusiness",
        "name": "Les Caravanes De La Besbre",
        "image": "https://lescaravanesdelabesbre.fr/images/logo.webp",
        "telephone": "06 86 41 31 71",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Camping Les bords de Besbre",
            "addressLocality": "Dompierre sur besbre",
            "addressRegion": "Auvergne-Rhône-Alpes", 
            "postalCode": "03290",
            "addressCountry": "FR"
        },
        "priceRange": "Abordable"  
    }
</script> -->



<!-- FIN Scripts JavaScript -->

<!-- _____________________________________________________________________________________ -->

<!-- Google Tag Manager -->

<!-- End Google Tag Manager -->

<!-- _____________________________________________________________________________________ -->

<!-- Google tag (gtag.js) -->


<!-- _____________________________________________________________________________________ -->

<!-- Google Analytics -->

<!-- End Google Analytics -->

<!-- _____________________________________________________________________________________ -->

<!--ZOOM SURVOL SOURIS SUR IMAGE CARD-->
<script>
    function zoomIn(img) {
        img.style.transform = "scale(1.5)"; // agrandir l'image 1.5 fois
        img.style.transition = "transform 0.5s"; // ajouter une transition de 0.5s pour une animation fluide
    }

    function zoomOut(img) {
        img.style.transform = "scale(1)"; // remettre l'image à sa taille d'origine
        img.style.transition = "transform 0.5s"; // ajouter une transition de 0.5s pour une animation fluide
    }
</script>

<!-- _____________________________________________________________________________________ -->

<!-- DATE MISE A JOUR AUTO COPYRIGHT FOOTER -->
<!-- <script>
    function afficherDate() {
        // Récupérer la date et l'année actuelles
        var date = new Date().getFullYear();
        // Mettre à jour le contenu de l'élément avec la date actuelle
        document.getElementById('date').textContent = date;
    }
    // Appeler la fonction afficherDate toutes les secondes
    setInterval(afficherDate, 1000);
</script> -->

<!-- _____________________________________________________________________________________ -->



<!--____________________________________________________________________________________-->

const canvas = document.getElementById('fireworksCanvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const particles = [];
const numParticles = 200;

function createParticle(x, y) {
    return {
        x,
        y,
        size: Math.random() * 3 + 1,
        speedX: (Math.random() - 0.5) * 10,
        speedY: (Math.random() - 0.5) * 10,
        lifetime: Math.random() * 60 + 30
    };
}

function drawParticles() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    ctx.fillStyle = 'gold';
    ctx.font = '20px monospace';
    
    particles.forEach(particle => {
        ctx.fillText('1', particle.x, particle.y);
        ctx.fillText('0', particle.x + particle.size, particle.y);

        particle.x += particle.speedX;
        particle.y += particle.speedY;
        particle.lifetime -= 1;
    });

    // Remove particles that are out of lifetime
    particles = particles.filter(particle => particle.lifetime > 0);
}

function createFirework() {
    const centerX = canvas.width / 2;
    const centerY = canvas.height / 2;

    for (let i = 0; i < numParticles; i++) {
        particles.push(createParticle(centerX, centerY));
    }
}

function animate() {
    drawParticles();
    requestAnimationFrame(animate);
}

function startFireworks() {
    createFirework();
    setInterval(createFirework, 2000); // Create a new firework every 2 seconds
}

startFireworks();
animate();

</body>
</html>