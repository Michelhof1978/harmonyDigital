<footer class="footer">
  <div class="container bottom_border">
    <div class="row">
      <div class=" col-sm-4 col-md col-sm-4  col-12 col">
        <h5 class="headin5_amrc col_white_amrc pt2">Nous Contacter !</h5>
        <!--headin5_amrc-->
        <p class="mb10">Pour toute question ou demande d'information, n'hésitez pas à nous contacter </p>
        <p><i class="fa fa-location-arrow"></i> 4 Lotissement La Croix Rouge <br>&nbsp; &nbsp; 03 230 Garnat Sur Engièvre </p>
        <p><i class="fa fa-phone"></i> +33-666332588</p>
        <p><i class="fa fa fa-envelope"></i> harmonydigitalweb@gmail.com</p>

      </div>

      <div class=" col-sm-4 col-md  col-6 col">
        <h5 class="headin5_amrc col_white_amrc pt2">Nous Contacter !</h5>
        <!--headin5_amrc-->
        <ul class="footer_ul_amrc">
          <li><a href="http://webenlance.com">Image Rectoucing</a></li>
          <li><a href="http://webenlance.com">Clipping Path</a></li>
          <li><a href="http://webenlance.com">Hollow Man Montage</a></li>
          <li><a href="http://webenlance.com">Ebay & Amazon</a></li>
          <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
          <li><a href="http://webenlance.com">Image Cropping</a></li>
        </ul>
        <!--footer_ul_amrc ends here-->
      </div>

      <div class=" col-sm-4 col-md  col-6 col">
        <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
        <!--headin5_amrc-->
        <ul class="footer_ul_amrc">
          <li><a href="http://webenlance.com">Remove Background</a></li>
          <li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
          <li><a href="http://webenlance.com">Logo Design</a></li>
          <li><a href="http://webenlance.com">Vectorization</a></li>
          <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
          <li><a href="http://webenlance.com">Image Cropping</a></li>
        </ul>
        <!--footer_ul_amrc ends here-->
      </div>

      <div class=" col-sm-4 col-md  col-12 col">
        <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
        <!--headin5_amrc ends here-->

        <ul class="footer_ul2_amrc">
          <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
            <p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p>
          </li>
          <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
            <p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p>
          </li>
          <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
            <p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p>
          </li>
        </ul>
        <!--footer_ul2_amrc ends here-->
      </div>
    </div>
  </div>

  <div class="container bg-dark w-100">
    <!--foote_bottom_ul_amrc ends here-->
    <p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>

    <ul class="social_footer_ul">
      <li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
      <li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
      <li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
    </ul>
    <!--social_footer_ul ends here-->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
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

</body>
</html>
