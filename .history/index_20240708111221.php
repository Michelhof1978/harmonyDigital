<?php include("head.php"); ?>
<meta name="description" content="">
<title>Harmony Digital</title>
<style>
    @keyframes infiniteBlink {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
    }

    .custom-animation {
        animation: infiniteBlink 2s infinite; /* 2s est la durée de l'animation, et "infinite" indique une répétition infinie */
    }
</style>

</head>
<body>
<?php include("header.php"); ?>

   <!-- TARIFS -->
   <section id="star-container" class="index text-center clear mt-4 ms-2 me-2">
   <h4 id="star-container" class="mb-5 border border-3 rounded display-6 p-2 col m-2  text-white border-orange">
  <strong>Nos Tarifs</strong>
</h4>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="images/" alt="site internet" loading="lazy" class="img-fluid rounded-3 mt-4">
          </div>
          <div class="card-body">
            <h5 class="card-title">Site Internet</h5>
            <p class="card-text">
              <strong>
              <h5 class="card-title">Gestion De Projet</h5>
                -Site vitrine<br>
                -Corporate<br>
                -Evènementiel<br>
                -E-commerce<br>
            </strong>
              <strong class="text-success">Tarif</strong><br>
              <strong class="text-success custom-animation">A partir de 600,00 €</strong><br><br>
            </p>
            <a href=".php" class="btn btn-primary">Plus d'infos !</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="../images/caravane2.webp" alt="Hébergements le pal" loading="lazy" class="img-fluid rounded-3 mt-4">
          </div>
          <div class="card-body">
            <h5 class="card-title">Caravane FLO</h5>
            <p class="tarifs"><strong>Tarif 89,00 €</strong></p>
            <p class="card-text">
              Tarif pour 4 personnes max (2 adultes avec 2 enfants) avec la possibilité de louer simultanément plusieurs caravanes pour accueillir des familles nombreuses.<br>
              <strong>Découvrez en détail et en images les caractéristiques des caravanes sur la page 'Camping'.</strong><br>
              Linge de lit non inclus, prévoir des draps de dimensions <strong>140/190 et 100/180</strong>.<br><br>
              Tarifs <strong>89,00 €</strong> la nuitée.<br><br>
              <strong class="text-success">PROMO</strong><br>
              <strong class="text-success custom-animation">Réduction de 10% sur la totalité du séjour à partir de la 3<sup>ème</sup> nuit réservée</strong><br><br>
              Option d'hébergement sous le auvent, permettant d'accueillir 2 personnes supplémentaires pour <strong>12,00 €</strong> par personne (matelas non fournis, veuillez prévoir).
            </p>
            <a href="resaContact.php" class="btn btn-primary">Réserver !</a><br><br>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="../images/caravane3.webp" alt="hôtel le pal" loading="lazy" class="img-fluid rounded-3 mt-4">
          </div>
          <div class="card-body">
            <h5 class="card-title">Caravane OLI</h5>
            <p class="tarifs"><strong>Tarif 89,00 €</strong></p>
            <p class="card-text">
              Tarif pour 4 personnes max (2 adultes avec 2 enfants) avec la possibilité de louer simultanément plusieurs caravanes pour accueillir des familles nombreuses.<br>
              <strong>Découvrez en détail et en images les caractéristiques des caravanes sur la page 'Camping'.</strong><br>
              Linge de lit non inclus, prévoir des draps de dimensions <strong>140/190 et 100/180</strong>.<br><br>
              Tarifs <strong>89,00 €</strong> la nuitée.<br><br>
              <strong class="text-success">PROMO</strong><br>
              <strong class="text-success custom-animation">Réduction de 10% sur la totalité du séjour à partir de la 3<sup>ème</sup> nuit réservée</strong><br><br>
              Option d'hébergement sous le auvent, permettant d'accueillir 2 personnes supplémentaires pour <strong>12,00 €</strong> par personne (matelas non fournis, veuillez prévoir).
            </p>
            <a href="resaContact.php" class="btn btn-primary">Réserver !</a><br><br>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
  
 

<?php include("footer.php"); ?>



