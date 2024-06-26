<body>
<?php
  // Constantes pour les URLs
  define('AUTHOR_URL', 'https://cvmichel-hoffmann.fr/');
  define('FACEBOOK_URL', 'https://www.facebook.com/lescaravanesdelabesbre/');
  define('TOURISM_URL', 'https://tourisme.interco-abl.info/');
  define('INSTAGRAM_URL', 'https://www.instagram.com/lescaravanesdelabesbre/?hl=fr');
  define('METEO_URL', 'https://meteofrance.com/previsions-meteo-france/allier/3');
  define('LINKEDIN_URL', 'https://www.linkedin.com/in/michel-h-245436203/');
  define('GITHUB_URL', 'https://github.com/Michelhof1978/');
  define('CAMPING_URL', 'https://camping.mairie-dsb.fr/');
  define('PAL_URL', 'https://www.lepal.com/');
  define('AIRBNB1_URL', 'https://www.airbnb.fr/rooms/34618829?check_in=2023-07-07&check_out=2023-07-09&guests=1&adults=2&s=13&unique_share_id=9da18392-0809-4421-8f7b-23e32304aadb&source_impression_id=p3_1673810175_X9sGQDLRkdBr8tX%2F');
  define('AIRBNB2_URL', 'https://www.airbnb.fr/rooms/34376099?check_in=2023-07-07&check_out=2023-07-09&guests=1&adults=2&s=13&unique_share_id=0e8b24e2-1835-49a1-a4a3-18082f186b0a&source_impression_id=p3_1673810303_FnHo0G0d1awJpqSg');
  define('AIRBNB3_URL', 'https://www.airbnb.fr/rooms/34376099?check_in=2023-07-07&check_out=2023-07-09&guests=1&adults=2&s=13&unique_share_id=0e8b24e2-1835-49a1-a4a3-18082f186b0a&source_impression_id=p3_1673810303_FnHo0G0d1awJpqSg');
  define('FESTIDOMPFB_URL', 'https://m.facebook.com/festi.domp.3');
  define('YOUTUBE1_URL', 'https://www.youtube.com/embed/s77ml0_4XUA');
  define('YOUTUBE2_URL', 'https://www.youtube.com/embed/m7PrIAN_Krs');
  define('METEOAPI_URL', 'https://api.openweathermap.org/data/2.5/weather?q=dompierre-sur-besbre&lang=fr&units=metric&appid=a2c110c02e86989d65348566c3ad09ff');
  define('TOURISME_URL', 'https://www.allier-auvergne-tourisme.com/commerce-et-service/dompierre-sur-besbre/office-de-tourisme-entr-allier-besbre-et-loire-site-de-dompierre-sur-besbre/4906237');
  define('VICHY_URL', 'https://www.ville-vichy.fr/ott');
  define('GEO_URL', 'https://play.google.com/store/apps/details?id=com.groundspeak.geocaching.intro&gl=FR');
  define('GEO2_URL', 'https://apps.apple.com/fr/app/geocaching/id329541503');
  define('PEPITS_URL', 'https://play.google.com/store/apps/details?id=fr.pepit03.appmobile&hl=fr');
  define('PEPITS2_URL', 'https://apps.apple.com/fr/app/p%C3%A9pit/id1362629980');

?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid justify-content-center">
        <div class="navbar-brand fs-2 mb-5">
            <strong class="text-white text-logo">
                <span class="text-orange">H</span>armony <span class="text-orange">D</span>igital
            </strong>
            <span class="orange">.</span>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav ms-5" id="menu">
                <li class="nav-item nav-spacing">
                    <a class="nav-link fs-5" href="index.php"><strong><span class="text-orange-nav">A</span>ccueil</strong></a>
                </li>
                <li class="nav-item nav-spacing">
                    <a class="nav-link fs-5" href=""><strong><span class="text-orange-nav">R</span>éalisations</strong></a>
                </li>
                <li class="nav-item nav-spacing">
                    <a class="nav-link fs-5" href=".php"><strong><span class="text-orange-nav">I</span>nformations</strong></a>
                </li>
                <li class="nav-item nav-spacing">
                    <a class="nav-link fs-5" href="formulaireDeContact.php"><strong><span class="text-orange-nav">C</span>ontactez-nous !</strong></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header id="special-header">
  <video autoplay muted loop id="video-bg">
    <source src="videos/header.mp4" type="video/mp4">
    Votre navigateur ne supporte pas la vidéo.
  </video>
  
  <div id="logo-container">
    <img src="images/logo.png" alt="Logo">
  </div>
</header>
