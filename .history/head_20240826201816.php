<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Harmony Digital - Experts en Création de Sites Web et Marketing Digital">
  <meta property="og:description" content="Harmony Digital : Conception de sites internet, design de maquettes et logos, SEO, marketing digital, communication événementielle et campagnes publicitaires. Services sur mesure pour booster votre visibilité en ligne.">
  <meta property="og:image" content="images/logo.ico">
  <meta name="author" content="HOFFMANN MICHEL - Harmony Digital">

  <!-- Favicon -->
  <link rel="icon" href="images/logo.ico">

  <!-- CSS Links -->
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Changa:wght@200..800&family=Jacquard+12&family=Orbitron:wght@400..900&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Special+Elite&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Black+And+White+Picture&display=swap" rel="stylesheet">

  <!-- Scripts -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NCWSBWT7');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-HPGMZYGZ9P"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-HPGMZYGZ9P');
  </script>

</head>

<body>
  <!-- Body content goes here -->
</body>

</html>

<!-- css Titres ne fonctionne pas ds le fichier css-->
  <style>
/* footer */
footer{
position:fixed;
bottom: 0;
width: 100%;
}

.container{
width: 100%;
}

.footer-section {
    background: #151414;
    position: relative;
}

.footer-cta {
    border-bottom: 1px solid #373636;
}

.single-cta i {
    color: #ff5e14;
    font-size: 30px;
    float: left;
    margin-top: 8px;
}

.cta-text {
    padding-left: 15px;
    display: inline-block;
}

.cta-text h4 {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 2px;
}

.cta-text span {
    color: #757575;
    font-size: 15px;
}

.footer-content {
    display: flex;
    justify-content: space-between; /* Espacement entre les colonnes */
    align-items: flex-start; /* Aligne en haut */
}

.footer-pattern img {
    position: absolute;
    top: 0;
    left: 0;
    height: 330px;
    background-size: cover;
    background-position: 100% 100%;
}

.footer-logo {
    margin-bottom: 30px;
}

.footer-logo img {
    max-width: 200px;
}

.footer-text p {
    margin-bottom: 14px;
    font-size: 14px;
    color: #7e7e7e;
    line-height: 28px;
}

.footer-social-icon {
    display: flex; /* Pour aligner les icônes horizontalement */
    align-items: center; /* Pour centrer verticalement les icônes */
}

.footer-social-icon span {
    color: #fff;
    display: block;
    font-size: 20px;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
    margin-bottom: 20px;
}

.footer-social-icon a {
    color: #fff;
    font-size: 16px;
    margin-right: 15px;
    transition: none; /* Retire la transition pour éviter les changements de couleur au survol */
}

.footer-social-icon i {
    height: 40px;
    width: 40px;
    text-align: center;
    line-height: 38px;
    border-radius: 50%;
}

/* Couleur de fond pour l'icône YouTube */
.youtube-bg {
    background-color: #FF0000; /* Couleur rouge de YouTube */
}

/* Couleur de fond pour l'icône LinkedIn */
.linkedin-bg {
    background-color: #0077b5; /* Couleur bleue de LinkedIn */
}


.footer-social-icon a:hover {
    color: #fff; /* Garde la couleur blanche des icônes au survol */
}

/* Styles pour les titres des widgets */
.footer-widget-heading h3 {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 20px; /* Marge ajustée pour plus d'espace au-dessus des liens */
    position: relative;
}

.footer-widget-heading h3::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: -15px;
    height: 2px;
    width: 50px;
    background: #ff5e14;
}

/* Styles pour les liens utiles */
.footer-links ul {
    padding: 0;
    list-style: none;
}

.footer-links ul li {
    margin-bottom: 10px;
}

.footer-links ul li a {
    color: #fff;
    text-decoration: none;
}

.footer-links ul li a:hover {
    text-decoration: underline;
}
.footer-links ul li {
    margin-bottom: 12px; /* Ajoute une marge inférieure pour séparer les éléments */
}

.footer-links ul li a {
    color: #878787;
    text-transform: capitalize;
}

.footer-links ul li a:hover {
    color: rgb(198, 119, 8);
}

/* Styles pour le formulaire de souscription */
.subscribe-form {
    position: relative;
    overflow: hidden;
}

.subscribe-form input {
    width: 100%;
    padding: 14px 28px;
    background: #2E2E2E;
    border: 1px solid #2E2E2E;
    color: #fff;
}

.subscribe-form button {
    position: absolute;
    right: 0;
    background: #ff5e14;
    padding: 13px 20px;
    border: 1px solid #ff5e14;
    top: 0;
}

.subscribe-form button i {
    color: #fff;
    font-size: 22px;
    transform: rotate(-6deg);
}

/* Styles pour la zone de copyright */
.copyright-area {
    background: #202020;
    padding: 25px 0;
}

.copyright-text p {
    margin: 0;
    font-size: 14px;
    color: #878787;
}

.copyright-text p a {
    color: beige;
}

/* Styles pour le menu du footer */
.footer-menu li {
    display: inline-block;
    margin-left: 20px;
}

.footer-menu li:hover a {
    color: #ff5e14;
}

.footer-menu li a {
    font-size: 14px;
    color: #878787;
}

/* Styles pour les éléments orange */
.text-orange-footer {
    font-size: 14px;
    color: #e06717e4;
}

.text-orange-footer-2 {
    font-size: 40px;
    color: #e06717e4;
}

.discord {
    color: #e06717e4;
}

.robotFooter{
    width: 100px;
    height: auto;
}
/* END FOOTER */

 /* COOKIES */
#cookie-banner {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #e06717e4;
            color: #fff;
            padding: 10px;
            text-align: center;
           
        }

        #cookie-banner p {
            margin: 0 0 10px;
        }

        #cookie-banner button {
            margin: 5px;
            cursor: pointer;
            background: #fff;
            color: #448ce7;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
        }
 /* FIN COOKIES */

/* TITRES */
.borderColor {
    border: 3px solid transparent; /* Bordure transparente, l'effet est créé par le border-image */
    border-image: linear-gradient(45deg, #0033cc, #0066ff, #3399ff, #66ccff) 1;
    /* Dégradé linéaire de bleu métal pour la bordure */
    background-image: url('images/fondBleu.webp');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    font-family: "Noticia Text", serif;
    font-weight: 700;
    font-style: normal;

    /* Effet métallique brillant */
    box-shadow: inset 0 0 5px rgba(255, 255, 255, 0.7), 0 0 10px rgba(0, 94, 255, 0.5), 0 0 15px rgba(0, 94, 255, 0.3);
}

.text-orange-titre{
  color: #e06717e4;
  font-size: 40px;
} 
/*FIN  TITRES */

/*FOOTER */
/* Discord */
.text-decoration-custom {
    text-decoration: none; /* Évite le soulignement du lien */
}
/*Fin FOOTER */


</style>



  
