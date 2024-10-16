
    <?php include("head.php"); ?>
    <meta name="description" content="Découvrez nos tarifs compétitifs pour la création de sites web, marketing digital, SEO, et design de logos. Paiement possible en plusieurs fois ou sous forme d'abonnement.">
<title>Tarifs de nos prestations </title>

<meta property="og:url" content="https://harmony-digital.fr/tarifs">
    <!-- Canonical Link -->
    <link rel="canonical" href="https://harmony-digital.fr/tarifs">

    <style>

.neon-yellow {
    color: rgba(255, 255, 51, 0.8); /* Code couleur pour un jaune néon plus clair et plus transparent */
    text-shadow: 0 0 5px rgba(255, 255, 51, 0.5), 
                 0 0 10px rgba(255, 255, 51, 0.5), 
                 0 0 20px rgba(255, 255, 51, 0.5);
    box-shadow: 0 0 10px rgba(255, 255, 51, 0.5), 
                0 0 20px rgba(255, 255, 51, 0.3), 
                0 0 30px rgba(255, 255, 51, 0.2);
    border-radius: 10px; /* Légèrement arrondir les bords */
    padding: 10px; 
    display: inline-block; /* Nécessaire pour que le box-shadow soit visible */
}


         /* Assure que la vidéo prend toute la largeur sur les petits écrans */
    @media (max-width: 767.98px) {
        .video-responsive {
            width: 100% !important;
            height: auto; /* Ajuste la hauteur pour maintenir les proportions */
        }
    }

    /* La largeur de la vidéo sur les écrans moyens et plus grands reste inchangée */
    .video-responsive {
        width: 75%; /* Ajuste la largeur pour les écrans moyens et plus grands */
        height: auto; /* Ajuste la hauteur pour maintenir les proportions */
    }
        .tarifs-section {
            margin-top: 30px;
        }
        .tarif-title {
            font-size: 1.5rem;
            margin-top: 20px;
            text-align: left;
        }
        .tarif-details {
            margin-bottom: 30px;
        }
        .tarif-details ul {
            list-style-type: none;
            padding-left: 0;
        }
        .tarif-details ul li {
            margin-bottom: 10px;
        }

        /* Fond € et $ index */
        #currency-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        .currency-particle {
            position: absolute;
            color: lime;
            font-family: 'Courier New', Courier, monospace;
            font-size: 10px;
            white-space: nowrap;
            animation: move 5s linear infinite;
            opacity: 0.8;
        }
        @keyframes move {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(100%);
            }
        }

        .video-container {
            position: relative;
            width: 100%;
            padding-top: 56.25%; /* Ratio 16:9 */
            margin-bottom: 20px;
        }

        .video-container iframe,
        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

    <?php include("header.php"); ?>

    <div id="currency-background"></div>

    <!-- Banner mobile -->
    <div class="container-fluid d-flex justify-content-center align-items-center full-height mt-5 d-none d-md-flex">
    <img src="images/banniererobottarifs.webp" alt="Bannière d'un robot présentant les tarifs ci-dessous" class="img-fluid w-50 rounded">
</div>
<!--Fin Banner mobile -->

 <!--Banner desktop -->
<div class="container-fluid d-flex justify-content-center align-items-center full-height mt-5 d-md-none">
    <img src="images/banniererobottarifs.webp" alt="Bannière d'un robot présentant les tarifs ci-dessous " class="img-fluid w-100 rounded mb-2">
</div>

<img src="images/gif5.gif" alt="robot gif" class="img-fluid d-block d-md-none" style="margin-bottom: -43px;">

<img src="images/gif5.gif" alt="robot gif" class="img-fluid d-none d-md-block" style="margin-bottom: -43px; margin-left: 150px;">
 <!--Fin Banner desktop -->
    <section class="container tarifs-section text-white">
    <div class="text-center mt-5">
        <h1 class="border borderColor border-4 rounded p-2 mx-auto">
            <strong class="text-white">Tarifs de nos prestations</strong>
        </h1>

        <h3 class="mt-5">
            <strong class="neon-yellow"> Paiement possible jusqu'à 10 fois gratuit</strong>
        </h3>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-6 text-center">
            <img src="images/robotTarifs1.webp" alt="robot illustratif" class="img-fluid mx-auto w-25">
        </div>
    </div>

    <!-- Vidéo pour mobile (12 colonnes) -->
<div class="d-flex justify-content-center align-items-center d-md-none" style="min-height: 50vh; margin-top: -75px; margin-bottom: -50px">
    <div class="video-container col-12">
        <video autoplay loop muted playsinline class="rounded w-100">
            <source src="videos/videotarif.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la balise <code>video</code>.
        </video>
    </div>
</div>

<!-- Vidéo pour desktop (6 colonnes) -->
<div class="d-flex justify-content-center align-items-center d-none d-md-flex" style="min-height: 50vh; margin-top: -120px; margin-bottom: -30px">
    <div class="video-container d-flex justify-content-center" style="max-width: 700px; width: 100%;">
        <video autoplay loop muted playsinline class="rounded" style="width: 100%;">
            <source src="videos/videotarif.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la balise <code>video</code>.
        </video>
    </div>
</div>




    <div class="row">
        <div class="col-md-6">
            <div class="tarif-details">
                <h2 class="tarif-title fw-bold">1. Site Web Vitrine</h2>
                <p>Un site vitrine est conçu pour présenter des informations de manière simple et efficace. Idéal pour les petites entreprises ou les professionnels souhaitant une présence en ligne de base.</p>
                <p><strong>Tarif :</strong> <span class="discord fw-bold">A partir de 590 Euros</span></p>
                <ul>
                    <li>Design de base et mise en page</li>
                    <li>Création de pages essentielles (accueil, à propos, contact)</li>
                    <li>Intégration des éléments de marque (logo, couleurs)</li>
                    <li>Optimisation SEO de base</li>
                    <li>Formation pour la gestion du contenu</li>
                    <li>Formulaire de contact suivant la formule choisie</li>
                    <li>Limité à 1 à 4 pages maximum selon la formule choisi</li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="tarif-details">
                <h2 class="tarif-title fw-bold">2. Site Web avec Fonctionnalités Avancées</h2>
                <p>Ces sites incluent des fonctionnalités supplémentaires comme des formulaires complexes, des galeries d'images, ou des options de personnalisation.</p>
                <p><strong>Tarif :</strong> <span class="discord fw-bold">A partir de 2 200 Euros </span></p>
                <ul>
                    <li>Design personnalisé et mise en page avancée</li>
                    <li>Intégration de fonctionnalités spécifiques (ex. : formulaires, galeries)</li>
                    <li>Optimisation SEO plus poussée</li>
                    <li>Intégration de plugins ou modules supplémentaires</li>
                    <li>Formation pour la gestion du contenu</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="tarif-details">
                <h2 class="tarif-title fw-bold">3. Site Web E-commerce</h2>
                <p>Pour les projets nécessitant des fonctionnalités de vente en ligne, comme les paiements en ligne, la gestion des stocks, et le suivi des commandes.</p>
                <p><strong>Tarif :</strong> <span class="discord fw-bold">A partir de 4 000 Euros</span></p>
                <ul>
                    <li>Configuration de la boutique en ligne</li>
                    <li>Intégration des systèmes de paiement sécurisés</li>
                    <li>Gestion des stocks et des produits</li>
                    <li>Optimisation SEO</li>
                    <li>Formation pour la gestion des commandes et du catalogue</li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="tarif-details">
                <h2 class="tarif-title fw-bold">4. Site Web sur Mesure</h2>
                <p>Pour les projets nécessitant des fonctionnalités totalement personnalisées ou des intégrations spécifiques.</p>
                <p><strong>Tarif :</strong> <span class="discord fw-bold">De 7 000 uros</span></p>
                <ul>
                    <li>Développement de fonctionnalités uniques</li>
                    <li>Design et UX sur mesure</li>
                    <li>Intégration avec des systèmes externes</li>
                    <li>Tests et optimisation</li>
                    <li>Formation pour la gestion du site</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row align-items-center mt-4">
        <div class="col-md-6">
            <div class="tarif-details">
                <h2 class="tarif-title fw-bold">5. Services Complémentaires</h2>
                <h3>Maintenance et Support</h3>
                <p><strong>Tarif Abonnement Mensuel :</strong> <span class="discord fw-bold">De 50 à 200 euros</span> </p>
                <ul>
                    <li>Mises à jour régulières</li>
                    <li>Sauvegardes</li>
                    <li>Support technique</li>
                </ul>
                
                <h3>Nom de Domaine</h3>
                <p><strong>Tarif Annuel :</strong> <span class="discord fw-bold">De 15 à 70 euros </span></p>
                <ul>
                    <li>Enregistrement et renouvellement du nom de domaine</li>
                </ul>

                <h3>Hébergement</h3>
                <p><strong>Tarif Annuel :</strong> <span class="discord fw-bold">De 60 à 200 euros</span> </p>
                <ul>
                    <li>Hébergement web</li>
                    <li>Support technique associé</li>
                    <li>Service d'Emailing</li>
                </ul>

                <h3>Protection contre les intrusions et les attaques par piratage</h3>
                <p><strong>Tarif Mensuel :</strong> <span class="discord fw-bold">5 euros</span></p>
                <ul>
                    <li>Sécurisation des données échangées entre le site et ses visiteurs</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="images/robotTarifs2.webp" alt="robot illustratif" class="img-fluid mx-auto w-50">
        </div>
</section>

<div class="mt-5 mb-5 d-flex justify-content-center align-items-center" style="min-height: 50vh;">
    <video autoplay loop muted playsinline class="rounded video-responsive">
        <source src="videos/iatarif.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la balise <code>video</code>.
    </video>
</div>




<section class="container tarifs-section text-white">
    <div class="text-center mt-5">
        <h1 class="border borderColor border-4 rounded p-2 mx-auto">
            <strong class="text-white">Tarifs pour la Création de Logo</strong>
        </h1>
        <img src="images/soucoupe.webp" alt="robot illustratif" class="img-fluid m-3 w-25">
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="tarif-details">
                <h2 class="tarif-title fw-bold">1. Logo de Base</h2>
                <p>Pour les entreprises ou les individus qui ont besoin d'un logo simple, avec des éléments graphiques de base.</p>
                <p><strong>Tarif :</strong> <span class="discord fw-bold">De 150 à 500 euros</span></p>
                <ul>
                    <li>Conception de 1 à 5 propositions de logo</li>
                    <li>Révisions limitées (généralement 1 à 5)</li>
                    <li>Livraison des fichiers finaux en formats raster (PNG, JPG)</li>
                    <li>Guide de style de base (couleurs, typographie)</li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="tarif-details">
                <h2 class="tarif-title fw-bold">2. Logo Standard</h2>
                <p>Pour des besoins plus élaborés, incluant plusieurs propositions et révisions.</p>
                <p><strong>Tarif :</strong> <span class="discord fw-bold">De 800 à 1 500 euros</span></p>
                <ul>
                    <li>Conception de 3 à 8 propositions de logo</li>
                    <li>Révisions supplémentaires (généralement 3 à 5)</li>
                    <li>Livraison des fichiers finaux en formats raster (PNG, JPG)</li>
                    <li>Guide de style détaillé (couleurs, typographie, utilisation)</li>
                    <li>Consultation sur l'identité visuelle</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="tarif-details">
                <h2 class="tarif-title fw-bold">3. Logo Premium</h2>
                <p>Pour les marques qui nécessitent une approche approfondie avec des recherches et une stratégie complète.</p>
                <p><strong>Tarif :</strong> <span class="discord fw-bold">De 1 500 à 3 000 euros</span></p>
                <ul>
                    <li>Conception de 5 à 15 propositions de logo</li>
                    <li>Révisions illimitées</li>
                    <li>Livraison des fichiers finaux en formats raster (PNG, JPG)</li>
                    <li>Guide de style complet (couleurs, typographie, utilisation)</li>
                    <li>Consultation stratégique et recherche de marque</li>
                    <li>Applications de logo sur divers supports</li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="tarif-details">
                <h2 class="tarif-title fw-bold">4. Logo sur Mesure</h2>
                <p>Pour des besoins spécifiques nécessitant des concepts entièrement personnalisés et une collaboration étroite.</p>
                <p><strong>Tarif :</strong> <span class="discord fw-bold">À partir de 3 000 euros</span></p>
                <ul>
                    <li>Conception personnalisée en fonction des besoins uniques</li>
                    <li>Recherche approfondie et développement</li>
                    <li>Révisions et itérations illimitées</li>
                    <li>Livraison des fichiers finaux en formats raster (PNG, JPG)</li>
                    <li>Guide de style complet avec applications variées</li>
                    <li>Support et conseils prolongés</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-6 text-center">
            <img src="images/robotTarifs3.webp" alt="robot illustratif" class="img-fluid mx-auto w-25">
        </div>
    </div>
</section>

<!-- ROBOT VIDEO DESKTOP -->
<div class="container-fluid px-0 mb-5 d-none d-md-block">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh; margin-top:-50px; margin-bottom:-100px;">
        <div class="video-container" style="max-width: 50%; margin: auto;">
            <video autoplay loop muted playsinline class="rounded w-100">
                <source src="videos/robotpresentation1.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la balise <code>video</code>.
            </video>
        </div>
    </div>
</div>
<!-- FIN ROBOT VIDEO DESKTOP-->

<!-- ROBOT VIDEO MOBILE -->
<div class="container-fluid px-0 mb-5 d-block d-md-none">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh; margin-top:-50px; margin-bottom:-100px;">
        <div class="video-container" style="width: 100%;">
            <video autoplay loop muted playsinline class="rounded w-100">
                <source src="videos/robotpresentation1.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la balise <code>video</code>.
            </video>
        </div>
    </div>
</div>
<!-- FIN ROBOT VIDEO MOBILE -->
    

<div class="fw-bold text-center m-5 text-white press-start-2p-regular">
    Pour toute demande relative aux tarifs à nos autres services,<br> nous vous prions de bien vouloir nous contacter.
</div>

    

    <?php include("footer.php"); ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const numParticles = 100; // Nombre total de particules
            const currencyBackground = document.getElementById('currency-background');
            const characters = ['€', '$'];

            function createParticle() {
                const particle = document.createElement('div');
                particle.className = 'currency-particle';
                particle.textContent = characters[Math.floor(Math.random() * characters.length)];
                particle.style.left = `${Math.random() * 100}vw`;
                particle.style.top = `${Math.random() * 100}vh`;
                particle.style.animationDuration = `${Math.random() * 5 + 5}s`; // Durée de l'animation entre 5 et 10 secondes
                currencyBackground.appendChild(particle);
            }

            for (let i = 0; i < numParticles; i++) {
                createParticle();
            }

            window.addEventListener('resize', () => {
                currencyBackground.innerHTML = '';
                for (let i = 0; i < numParticles; i++) {
                    createParticle();
                }
            });
        });
    </script>
</body>
</html>
