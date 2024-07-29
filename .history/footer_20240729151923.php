<footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Adresse</h4>
                                <span>4, Lotissement La Croix Rouge<br>03 230 Garnat Sur Engièvre</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Appelez-Nous !</h4>
                                <span>0033-666332588</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail</h4>
                                <span>harmonydigitalweb@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
 <!-- Logo et titre -->
 <a class="navbar-brand" href="index.php">
            <strong class="text-white nav-brand">
                <span class="text-orange-footer-2">H</span class="text-orange-footer-2">armony <span class="text-orange-footer-2">D</span>igital
            </strong>
            <span class="orange">.</span>
        </a>                            </div>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="footer-social-icon">
        <span>Suivez-nous !</span>
        <a href="https://www.youtube.com/channel/UCSHUogEcs5VBu6IfBbqJ42g" target="_blank">
            <i class="fab fa-youtube youtube-bg"></i>
        </a>
    </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Newsletter</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Abonnez-vous à notre newsletter pour rester informé des dernières actualités.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Adresse Mail">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
        <div class="container d-flex justify-content-center">
    <div class="row">
        <div class=" text-center">
            <div class="copyright-text">
                <p>Copyright &copy; <span id="date"></span>, Droits réservés <a href="https:"><span class="text-orange-footer">H</span>armony-<span class="text-orange-footer">D</span>igital
                </a></p>
            </div>
        </div>
    </div>
</div>

              <!-- COMPTEUR -->
<div class="text-center mt-3 mb-3">
<a href="http://www.mon-compteur.fr"><img src="http://www.mon-compteur.fr/html_c01genv2-242156-1" loading="lazy" alt="nombre de visites" /></a>
</div>
        </div>
      
    </footer>

<!-- COOKIES -->
<div id="cookie-banner">
    <p><strong>Nous utilisons des cookies pour améliorer votre expérience sur notre site.<br> Acceptez-vous l'utilisation des cookies ?</strong> </p>
    <button onclick="acceptCookies()"><strong>Accepter</strong></button>
    <button onclick="refuseCookies()"><strong>Refuser</strong></button>
</div>




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
<script>
    function afficherDate() {
        // Récupérer la date et l'année actuelles
        var date = new Date().getFullYear();
        // Mettre à jour le contenu de l'élément avec la date actuelle
        document.getElementById('date').textContent = date;
    }
    // Appeler la fonction afficherDate toutes les secondes
    setInterval(afficherDate, 1000);
</script> 

<!-- _____________________________________________________________________________________ -->



<!--____________________________________________________________________________________-->

</body>
</html>
