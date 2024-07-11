<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("head.php"); ?>
  <meta name="description" content="">
  <title>Harmony Digital</title>
  <style>
    /* css CARD ajouté ds le head car non opérationnel sur le fichier css */
    @keyframes infiniteBlink {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
    }

    /* Animation tarif clignotant */
    .custom-animation {
        animation: infiniteBlink 3s infinite; /* 2s est la durée de l'animation, et "infinite" indique une répétition infinie */
    }

    .textcard{
    margin-top: -80px;
  }

  .imgcard{
    margin-top: -40px;
  }

   /* Fin css CARD  */

    /* Titre */
    .borderColor{
      color: #e06717e4 !important;
    }
  </style>
</head>
<body>
  <!-- Conteneur pour l'animation des 0 et 1 -->
  <div id="star-container"></div>

  <?php include("header.php"); ?>

  <!-- TARIFS -->
  <section class="text-center mt-4 ms-2 me-2">
    <h4 class="mb-5 border borderColor border-5 rounded display-6 p-2 col m-2 text-white ">
      <strong>Nos Tarifs</strong>
    </h4>

    <div class="row">
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

      <!-- Autres cartes ici -->

    </div>
  </section>

  <?php include("footer.php"); ?>
  
  <script>
    const chars = '01';

    function createStarLines() {
      const lineCount = 30; // Nombre de lignes de lettres et chiffres
      const charsPerLine = 320; // Nombre de caractères par ligne

      const starContainer = document.getElementById('star-container');
      if (!starContainer) return; // S'assurer que l'élément existe

      for (let i = 0; i < lineCount; i++) {
        const line = document.createElement('div');
        line.className = 'star-line';

        for (let j = 0; j < charsPerLine; j++) {
          const char = chars.charAt(Math.floor(Math.random() * chars.length));
          const span = document.createElement('span');
          span.textContent = char;
          span.className = 'star';
          span.style.animationDelay = `${Math.random() * 1550}s`; // Délai d'animation aléatoire
          span.style.marginRight = '3em'; // Marge horizontale entre les caractères
          line.appendChild(span);
        }

        starContainer.appendChild(line); // Ajouter la ligne au conteneur
      }
    }

    // Générer les lignes de lettres et chiffres scintillants au chargement de la page
    document.addEventListener('DOMContentLoaded', function() {
      createStarLines();
    });
  </script>
</body>
</html>
