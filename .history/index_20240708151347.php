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

    .textcard{
    margin-top: -80px;
  }

  .imgcard{
    margin-top: -40px;
  }
    .pricecard{
    
    }

</style>

</head>
<body>
<?php include("header.php"); ?>

   <!-- TARIFS -->
   <section id="star-container" class="index text-center clear mt-4 ms-2 me-2">
   
   <h4 class="mb-5 border border-5 rounded display-6 p-2 col m-2  text-white ">
  <strong>Nos Tarifs</strong>
</h4>

    <div class="row ">
      <div class="col-lg-3 col-md-6">
        <div class="card bg-dark">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="images/card1.png" alt="site internet" loading="lazy" class="imgcard img-fluid">
           
            <p class="textcard card-text text-white">
            <strong><span class="text-orange-nav">S</span>ites <span class="text-orange-nav">V</span>itrines</strong><br>
            <strong><span class="text-orange-nav">C</span>orporate</strong><br>
            <strong><span class="text-orange-nav">E</span>vènementiel</strong><br>
            <strong><span class="text-orange-nav">E</span>-<span class="text-orange-nav">C</span>ommerce</strong><br>
            </p>

          </div>

          <strong class="pricecard text-white custom-animation mt-3">A partir de 890,00 €</strong>
          
          <div class="card-body"> 
            <a href=".php" class="border border-3 border-white btn text-white">Plus d'infos !</a>
          </div>

        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="images/card2" alt="Hébergements le pal" loading="lazy" class="img-fluid rounded-3 mt-4">
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



