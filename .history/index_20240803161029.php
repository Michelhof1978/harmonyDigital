<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("head.php"); ?>
    <meta name="description" content="Nous sommes votre partenaire de confiance pour la création de sites web professionnels. Notre équipe vous aide à concevoir des sites web attrayants et fonctionnels qui répondent à vos besoins spécifiques et optimisent votre présence en ligne.">
    <title>Conception de Sites Web de Qualité | Création Professionnelle & Optimisation SEO</title>
    <style>
h4 {
    color: #FFFF66; /* Jaune néon très clair */
}
   /* ------------------------------------------------------------------------- */

/* Discord */
.text-decoration-custom {
    text-decoration: none; /* Évite le soulignement du lien */
}

.text-decoration-custom:hover .text-orange-nav2 {
    color: white; /* Change la couleur du texte en blanc au survol */
}

/* Domaine de compétence */
.textIntro {
	margin-top: 40px;
    background-image: url('Images/fondBleu.png');
  background-size: cover;
    background-position: center;
   background-repeat: no-repeat;
}

.robotIndex {
	position: fixed;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    width: 20%; 
    
}

.neon-yellow {
    color: rgba(255, 255, 51, 0.8); /* Code couleur pour un jaune néon plus clair et plus transparent */
    text-shadow: 0 0 5px rgba(255, 255, 51, 0.5), 
                 0 0 10px rgba(255, 255, 51, 0.5), 
                 0 0 20px rgba(255, 255, 51, 0.5);
    box-shadow: 0 0 10px rgba(255, 255, 51, 0.5), 
                0 0 20px rgba(255, 255, 51, 0.3), 
                0 0 30px rgba(255, 255, 51, 0.2);
    border-radius: 10px; /* Légèrement arrondir les bords */
    padding: 10px; /* Ajouter du padding pour que l'effet soit plus visible */
    display: inline-block; /* Nécessaire pour que le box-shadow soit visible */
}


.neon-section {
  border-radius: 5px;
}

.robotDomaine {
    max-width: 50%; /* Ajustez la valeur en pourcentage pour réduire l'image */
  height: 150px; /* Conserve le ratio de l'image */
  display: block;
  margin: 0 auto; /* Centre l'image */
  margin-top: 20px;
}
.robotSeparateur {
    max-width: 50%; /* Ajustez la valeur en pourcentage pour réduire l'image */
  height: 100px; /* Conserve le ratio de l'image */
  display: block;
  margin: 0 auto; /* Centre l'image */
  
}
.h2competence {
  margin-top: -70px;
}
 /* Fin domaine de compétence*/

  /*Intro*/
.offre {
    margin-left: 100px;  
 } 

 .intro {
    margin-right: 60px;
    margin-top: 30px;
    background-image: url('Images/fondBleu.png');
  background-size: cover;
    background-position: center;
   background-repeat: no-repeat;
   border-radius: 5px;
     
 } 
 /*Fin Intro*/

    /* ------------------------------------------------------------------------- */

  /*Intro2*/
 .robotDomaine2 {
    max-width: 25%; /* Ajustez cette valeur selon la taille souhaitée de l'image */
    height: auto; /* Conserve le ratio de l'image */
    position: absolute; /* Positionnement absolu */
    left: 0; /* Aligne l'image complètement à gauche */
    top: 40px; /* Décale l'image vers le bas depuis le haut du conteneur */
    margin-top: 300px;
}

.intro2 {
    margin-left: 30%; /* Ajustez cette valeur pour faire de la place pour l'image */
    padding-left: 20px; /* Optionnel : ajoute un espace entre l'image et le texte */
}

/*fin Intro2*/

   /* ------------------------------------------------------------------------- */

/*Section VIDEOCOM*/
.text-orange-video {
  color: #e06717e4;
  font-size: 25px;
  font-weight: 700;
}

.videoCom {
  padding: 15px;
  border: 1px solid #ddd;
  background: #FFF;
  background: linear-gradient(#FFF, #FFF 20%, #EEE 80%, #DDD);
  border-radius: 2px;
  box-shadow: 0 0 3px rgba(0,0,0, 0.2);
  margin-bottom: 20px;
}

.embed-responsive iframe {
  width: 100%;
  height: 315px;
}

@media (max-width: 767px) {
  .row > div:first-child {
    margin-bottom: 20px;
  }
}
/*Fin Section VIDEOCOM*/

   /* ------------------------------------------------------------------------- */

 /* Styles généraux du popup */
 .popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    text-align: center;
    max-width: 90%; /* Largeur max pour le popup */
    max-height: 90%; /* Hauteur max pour le popup */
    overflow: hidden; /* Empêche le débordement */
  }

  .popup img {
    max-height: 100%; /* Ajuster l'image pour remplir le popup */
    max-width: 100%;
    width: auto;
    height: auto;
  }

  .popup button {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    border: none;
    background: transparent;
    color: black;
    font-size: 20px;
    padding: 0;
    margin: 0;
  }

  /* Styles pour tablettes */
  @media (max-width: 768px) {
    .popup {
      max-width: 80%; /* Ajuster la largeur max pour les tablettes */
      max-height: 80%; /* Ajuster la hauteur max pour les tablettes */
    }
  }

  /* Styles pour mobiles */
  @media (max-width: 480px) {
    .popup {
      max-width: 95%; /* Ajuster la largeur max pour les mobiles */
      max-height: 95%; /* Ajuster la hauteur max pour les mobiles */
    }

    .popup button {
      font-size: 18px; /* Réduire la taille du bouton de fermeture sur les mobiles */
    }
  }
   /* ------------------------------------------------------------------------- */
  
   /* CARDS CAROUSEL */
/* Styles généraux pour le carousel */
.carousel-container {
    position: relative;
    padding: 20px;
    margin-top: -50px;
}

.carousel-control-prev,
.carousel-control-next {
    position: absolute;
    top: 50%;
    width: 40px;
    height: 40px;
    margin-top: -70px;
    background-color: #e06717e4;
    border-radius: 50%;
}

.carousel-control-prev {
    left: 0;
}

.carousel-control-next {
    right: 0;
}

/* Animation clignotante pour les tarifs */
.custom-animation {
    animation: infiniteBlink 2s infinite;
}

@keyframes infiniteBlink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0; }
}
/* FIN Animation clignotante pour les tarifs */

.pricecard {
    font-size: 30px !important;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    margin-top: -70px;
}

.info {
    font-size: 22px !important;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    border: 3px solid #e06717e4; 
    padding: 5px 10px;
}

/* Media queries pour les écrans mobiles */
@media (max-width: 768px) {
    .carousel-inner {
        display: flex;
        overflow-x: scroll;
        scroll-snap-type: x mandatory;
    }

    .carousel-item {
        flex: 0 0 100%;
        scroll-snap-align: start;
    }

    .card {
        transform: scale(0.75);
        margin: 10px auto;
        width: 80%;
        max-width: 250px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .pricecard {
        font-size: 20px !important;
        margin-top: -30px;
    }

    .info {
        font-size: 20px !important;
        border-width: 2px;
        padding: 6px 10px;
       margin-bottom: 40px;
    }

    .carousel-control-prev,
    .carousel-control-next {
        margin-top: -20px;
    }

    .carousel-inner .d-flex {
        flex-wrap: nowrap;
        flex-direction: column;
        align-items: center;
    }

    .carousel-inner .d-flex > .card:first-child,
    .carousel-inner .d-flex > .card:last-child {
        margin-left: 0;
        margin-right: 0;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 40px;
        height: 40px;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(224, 103, 23, 0.8);
        border-radius: 50%;
        opacity: 0.8;
    }

    .carousel-control-prev {
        left: 5%;
    }

    .carousel-control-next {
        right: 5%;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        width: 20px;
        height: 20px;
    }

    .imgcard {
        max-height: 180px;
        object-fit: cover;
        margin-top: 10px;
    }
}

@media (min-width: 769px) {
    .card-group {
        display: flex;
    }
    .card {
        flex: 1 0 30%;
    }
    .mobile-hide {
        display: block;
    }
}

/* Styles pour les cartes */
.card {
    transform: scale(0.7);
    transform-origin: center center;
    flex: 1 0 30%;
    box-sizing: border-box;
    margin: 0 -90px;
    background-image: url('Images/fondBleu.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.carousel-inner .d-flex > .card:first-child,
.carousel-inner .d-flex > .card:last-child {
    margin-left: 30px;
    margin-right: 30px;
}

.carousel-inner .d-flex {
    flex-wrap: wrap;
    justify-content: center;
    margin-bottom: 80px;
}

/* FIN CARDS CAROUSEL */

</style>

</head>
<body>
    <?php include("header.php"); ?>
    <div id="binary-background"></div>

    <!-- INTRO -->
    <div class="mt-5">
        <h1 class="border borderColor border-4 rounded p-2 col m-4 text-center">
            <strong class="text-white">Votre Partenaire pour la Création de Sites Web Professionnels</strong>
        </h1>
    </div>

    <section class="mt-5 container mb-5">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-12 col-md-6 mt-3 order-2 order-md-1">
                <img src="images/offre2024.png" alt="robot" loading="lazy" class="img-fluid w-50 w-md-75 mx-auto">
            </div>
            <div class="col-12 col-md-6 mt-4 text-white order-3 order-md-2">
                <div class="d-flex justify-content-center">
                    <p class="fs-5 lead p-3 intro mx-auto fw-bold">
                        Nous pouvons réaliser tous vos projets à distance en effectuant des points réguliers via le réseau 
                        <a href="https://discord.com" class="text-decoration-custom" target="_blank" rel="noopener noreferrer">
                            <span class="text-orange-nav2">Discord</span>
                        </a>
                    </p>
                </div>
                <p class="mt-4 mb-5 lead fs-4 neon-yellow text-white">
                    <strong>
                        Conception de Sites Internet<br>
                        Réalisation Maquettes et Logos<br>
                        Référencement SEO<br>
                        Marketing Digital<br>
                        Communication En Événementielle<br>
                        Réalisation Campagne Publicitaire<br>
                    </strong>
                </p>
            </div>
        </div>
    </section>
    <!-- FIN INTRO -->

    <!-- PRESTATIONS CAROUSEL -->
    <section class="text-center mt-4 ms-2 me-2">
        <div>
            <h2 class="border borderColor border-4 rounded p-2 mb-4">
                <strong class="text-white">Nos Prestations</strong>
            </h2>
            <p class="text-white lead fs-4" style="font-weight: bold;">
                Des solutions sur mesure pour satisfaire vos besoins.
            </p>
        </div>

        <div id="tarifCarousel" class="carousel slide carousel-container">
            <div class="carousel-inner">
                <!-- Premier groupe de cartes -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="images/card1.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            </div>
                            <strong class="pricecard text-white custom-animation mb-5">À partir de 890,00 €</strong>
                            <div class="card-body">
                                <a href="votre-url-1" class="info btn text-white ">Plus d'infos !</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="images/card2.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            </div>
                            <strong class="pricecard text-white custom-animation ">À partir de 790,00 €</strong>
                            <div class="card-body">
                                <a href="votre-url-2" class="info btn text-white">Plus d'infos !</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="images/card3.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            </div>
                            <strong class="pricecard text-white custom-animation ">À partir de 125,00 €</strong>
                            <div class="card-body">
                                <a href="votre-url-3" class="info btn text-white">Plus d'infos !</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deuxième groupe de cartes -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="images/card4.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            </div>
                            <strong class="pricecard text-white custom-animation mb-5">À partir de 750,00 €</strong>
                            <div class="card-body">
                                <a href="votre-url-4" class="info btn text-white">Plus d'infos !</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="images/card5.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            </div>
                            <strong class="pricecard text-white custom-animation mb-5">À partir de 350,00 €</strong>
                            <div class="card-body">
                                <a href="votre-url-5" class="info btn text-white">Plus d'infos !</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="images/card6.png" alt="site internet" loading="lazy" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)" class="imgcard img-fluid">
                            </div>
                            <strong class="pricecard text-white custom-animation mb-5">À partir de 250,00 €</strong>
                            <div class="card-body">
                                <a href="votre-url-6" class="info btn text-white">Plus d'infos !</a>
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
    <!-- FIN PRESTATIONS CAROUSEL -->

    <!-- DOMAINE DE COMPETENCE -->
    <div class="text-center">
        <h2 class="border borderColor border-4 rounded p-2 m-3 mb-5">
            <strong class="text-white"><span class="text-orange-titre">D</span>omaine<span class="text-orange-titre"> D</span>e <span class="text-orange-titre"> C</span>ompétences</strong>
            <p class="text-white lead fs-2"><strong>Ensemble, donnons vie à vos idées et propulsons votre entreprise vers de nouveaux sommets.</strong></p>
        </h2>
    </div>

    <section class="d-flex ms-0 mb-5 position-relative text-center me-5">
        <!-- Image à gauche -->
        <img src="images/robotIntro3.png" alt="robot" loading="lazy" class="img-fluid robotDomaine2">
        
        <!-- Contenu principal -->
        <div class="w-75 text-white intro2 mt-5"> 
            <h3><strong class="text-orange-nav2">Pour</strong> tout type de projets : <strong>Site Vitrine, E-commerce, Application Web, Stratégie Digitale...</strong></h3>
            <p><strong class="text-orange-nav2">Nous créons</strong> des solutions innovantes, en mettant l'accent sur la qualité et l'efficacité.</p>
            <p class="mb-5"><strong class="text-orange-nav2">Pourquoi</strong> nous choisir ? <strong>Notre expérience et notre engagement à offrir un service de premier choix.</strong></p>
        </div>
    </section>

    <!-- Clients -->
    <section class="text-center mt-4 ms-2 me-2">
        <h2 class="border borderColor border-4 rounded p-2 mb-4">
            <strong class="text-white">Nos Clients</strong>
        </h2>
        <p class="text-white lead fs-4" style="font-weight: bold;">
            Nos clients témoignent de notre professionnalisme et de notre expertise.
        </p>

        <!-- Carrousel des clients -->
        <div id="clientCarousel" class="carousel slide carousel-container">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <img src="images/clients/client1.png" alt="client1" loading="lazy" class="img-fluid client-image">
                        <img src="images/clients/client2.png" alt="client2" loading="lazy" class="img-fluid client-image">
                        <img src="images/clients/client3.png" alt="client3" loading="lazy" class="img-fluid client-image">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="images/clients/client4.png" alt="client4" loading="lazy" class="img-fluid client-image">
                        <img src="images/clients/client5.png" alt="client5" loading="lazy" class="img-fluid client-image">
                        <img src="images/clients/client6.png" alt="client6" loading="lazy" class="img-fluid client-image">
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#clientCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#clientCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- FIN Clients -->

    <?php include("footer.php"); ?>
</body>


 <!-- ------------------------------------------------------------------- -->
   <!-- COOKIES -->
<script>
    // Fonction pour obtenir la valeur d'un cookie
    function getCookie(name) {
        let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        if (match) return match[2];
    }

    // Fonction pour définir un cookie avec une durée d'expiration (en jours)
    function setCookie(name, value, days) {
        let expires = '';
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = '; expires=' + date.toUTCString();
        }
        document.cookie = name + '=' + value + expires + '; path=/';
    }

    // Fonction appelée lorsqu'un utilisateur accepte les cookies
    function acceptCookies() {
        // Ajoutez ici le code pour définir les cookies ou effectuer d'autres actions nécessaires

        // Définir un cookie indiquant que l'utilisateur a accepté les cookies
        setCookie('cookieConsent', 'accepted', 365);

        document.getElementById('cookie-banner').style.display = 'none';
    }

    // Fonction appelée lorsqu'un utilisateur refuse les cookies
    function refuseCookies() {

        document.getElementById('cookie-banner').style.display = 'none';
    }

    // Vérifier si l'utilisateur a déjà accepté les cookies
    if (getCookie('cookieConsent') !== 'accepted') {
        // Affiche la bannière de consentement après un délai 
        setTimeout(function() {
            document.getElementById('cookie-banner').style.display = 'block';
        }, 2000);
    }
</script>

<!-- Affichage Popup -->
<script>
  // Fonction pour vérifier si le popup a déjà été affiché aujourd'hui
  function isPopupShown() {
    const date = new Date();
    const dateString = `${date.getFullYear()}/${date.getMonth() + 1}/${date.getDate()}`;
    return document.cookie.includes(`popupShown=${dateString}`);
  }

  // Fonction pour définir le cookie indiquant que le popup a été affiché aujourd'hui
  function setPopupShown() {
    const date = new Date();
    // Fixer l'expiration à la fin du jour
    date.setHours(23, 59, 59, 999);
    const dateString = `${date.getFullYear()}/${date.getMonth() + 1}/${date.getDate()}`;
    document.cookie = `popupShown=${dateString}; expires=${date.toUTCString()}; path=/`;
  }

  // Vérifie si le popup n'a pas déjà été montré aujourd'hui
  if (!isPopupShown()) {
    let popupDiv = document.createElement("div");
    popupDiv.className = "popup"; // Ajouter la classe popup
    popupDiv.style.cssText = "position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999; text-align: center;";

    let imgContainer = document.createElement("div");
    imgContainer.style.cssText = "position: relative; display: inline-block;";

    let img = document.createElement("img");
    img.src = "images/offre2024.png"; 
    img.style.maxHeight = '100%'; // Ajuster à 100% de la hauteur du popup
    img.style.maxWidth = '100%'; // Ajuster à 100% de la largeur du popup
    img.style.width = 'auto'; // Ajuster largeur automatiquement pour maintenir le ratio
    img.style.height = 'auto'; // Ajuster hauteur automatiquement pour maintenir le ratio
    imgContainer.appendChild(img);

    let closeButton = document.createElement("button");
    closeButton.textContent = "✖"; // Symbole de fermeture
    closeButton.style.cssText = "position: absolute; top: 10px; right: 10px; cursor: pointer; border: none; background: transparent; color: black; font-size: 20px; padding: 0; margin: 0;";

    closeButton.onclick = function () {
      document.body.removeChild(popupDiv);
      setPopupShown();
    };

    imgContainer.appendChild(closeButton);
    popupDiv.appendChild(imgContainer);
    document.body.appendChild(popupDiv);

    // Optionnel: fermeture automatique après 30 secondes
    setTimeout(function() {
      if (document.body.contains(popupDiv)) {
        document.body.removeChild(popupDiv);
      }
      setPopupShown();
    }, 30000);
  }
</script>
<!-- _____________________________________________________________________________________ -->

</body>
  </html>

  