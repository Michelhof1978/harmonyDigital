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

   <!-- SEO Balises Open Graph pour un meilleur partage sur les réseaux sociaux -->
   <meta property="og:title" content="Agence Création de Sites Internet - HARMONY DIGITAL">
    <meta property="og:description" content="Nous créons des sites internet performants et optimisés pour le SEO.">
    <meta property="og:image" content="images/logo.ico">
    <meta property="og:url" content="https://harmony-digital.fr/">

    <!--SEO  Balises pour les mots-clés  -->
   <meta name="keywords" content="création site internet, création site web, agence web, agence web Decize, agence web Bourgogne-Franche-Comté, SEO, référencement, développement web, logo, marketing digital, création site internet sur mesure, site vitrine, site e-commerce, agence digitale, design web, refonte de site internet, optimisation SEO, visibilité en ligne, stratégie numérique, site web responsive, création de contenu, maintenance de site, gestion de projet web, hébergement web, développement front-end, développement back-end, programmation web, audit SEO, analyse de trafic, expérience utilisateur, interface utilisateur, branding, identité visuelle, conception graphique, rédaction web, campagnes publicitaires, marketing de contenu, publicité en ligne, Google Ads, réseaux sociaux, community management, site internet professionnel, solutions web, agence de communication, conception de site internet, boutique en ligne, CMS, WordPress, Shopify, WooCommerce, référencement local, analyse concurrentielle, site internet rapide, création site internet optimisé, webmaster, gestion de contenu, technologies web, transformation digitale, marketing de proximité, marketing mobile, performance web, design UX, design UI, accessibilité web, tendances web, services web, développement mobile, optimisation de conversion, freelance web, application web, consulting web, support technique, landing page, marketing automation, newsletter, optimisation images, stratégie SEO local, backlinks, moteurs de recherche, analytics, web design moderne, portfolio en ligne, services créatifs, agence de développement, accompagnement digital, solutions e-commerce, web 3.0, référencement naturel, netlinking, blogging, articles SEO, formation SEO, coaching web, influenceurs numériques, content marketing, site d'entreprise, landing pages efficaces, technologies innovantes, digitalisation, optimisation mobile, certification SSL, sécurité web, gestion de bases de données, prototypage, wireframes, migration de site, services UX/UI, design graphique personnalisé, optimisation de performance, solutions de marketing digital, web analytique">


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
  <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->

  <!-- Google Tag Manager -->
  <!-- <script>
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
  </script> -->
  <!-- End Google Tag Manager -->

  <!-- Google Analytics -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-HPGMZYGZ9P"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-HPGMZYGZ9P');
  </script> -->



<!-- css Titres ne fonctionne pas ds le fichier css-->
  <style>
/* BANNER */
/* .banner {
            width: 100%;
            height: 350px; 
            background-image: url('images/banner.png'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        } */

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



  
