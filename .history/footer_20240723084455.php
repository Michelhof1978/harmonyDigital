<footer class="container-fluid bg-dark">
  
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
<!-- COMPTEUR -->
<div class="text-center mt-3">
<a href="http://www.mon-compteur.fr"><img src="http://www.mon-compteur.fr/html_c01genv2-242156-1" loading="lazy" alt="nombre de visites" /></a>
</div>

<!-- COOKIES -->
<div id="cookie-banner">
    <p>Nous utilisons des cookies pour améliorer votre expérience sur notre site. Acceptez-vous l'utilisation des cookies ?</p>
    <button onclick="acceptCookies()">Accepter</button>
    <button onclick="refuseCookies()">Refuser</button>
</div>

<!-- _____________________________________________________________________________________ -->


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


