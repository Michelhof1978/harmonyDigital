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
    .borderColor{
      color: #e06717e4 !important;
    }

    
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

    .textcard {
        margin-top: -80px;
    }

    .imgcard {
        margin-top: -40px;
    }

    .borderColor {
        color: #e06717e4 !important;
    }

    /* Style pour les 1 et 0 en arrière-plan */
    .binary-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1; /* Derrière tout le contenu */
    }

    .binary-line {
        display: flex;
        justify-content: center;
        align-items: center;
        white-space: nowrap;
        height: 1em;
        width: 100%;
    }

    .binary-char {
        opacity: 0;
        animation: sparkle 1s infinite alternate;
        font-size: 12px;
        color: rgba(255, 255, 255, 0.1); /* Couleur blanche translucide */
    }

    @keyframes sparkle {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    /* Général */
    body {
        font-family: 'Times New Roman', Times, serif;
        background-image: url('Images/fondGris6.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }

</style>

</head>
<body>
<?php include("header.php"); ?>

<!-- Conteneur pour les 1 et 0 -->
<div class="binary-background" id="binary-background"></div>

<div id="main-content">
    <!-- TARIFS -->
    <section id="star-container" class="index text-center clear mt-4 ms-2 me-2">
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

            <!-- Autres cartes similaires -->

        </div>
    </section>
</div>

<?php include("footer.php"); ?>
