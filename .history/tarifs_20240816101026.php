
    <?php include("head.php"); ?>
    <meta name="tarifs" content="Détails des tarifs pour nos services web">
    <title>Tarifs - Agence Web</title>
  
    <style>
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


        /* VIDEO POUR MOBILE */
        .video-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh; /* Utilise toute la hauteur de l'écran */
            margin: 0;
            padding: 0;
        }

        .video-container video {
            width: 100%;
            height: auto; /* Maintient le ratio d'aspect de la vidéo */
        }

        /* Assurez-vous que la vidéo sur les grands écrans reste inchangée */
        @media (min-width: 768px) {
            .video-container {
                display: none;
                mar
            }
        }
    </style>
</head>

    <?php include("header.php"); ?>

    <div id="currency-background"></div>

    <section class="container tarifs-section text-white">
    <div class="text-center mt-5">
        <h1 class="border borderColor border-4 rounded p-2 mx-auto">
            <strong class="text-white">Tarifs pour la Création de Site Web</strong>
        </h1>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-6 text-center">
            <img src="images/robotTarifs1.png" alt="robot" class="img-fluid mx-auto w-25">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="tarif-details">
                <h2 class="tarif-title fw-bold">1. Site Web Vitrine</h2>
                <p>Un site vitrine est conçu pour présenter des informations de manière simple et efficace. Idéal pour les petites entreprises ou les professionnels souhaitant une présence en ligne de base.</p>
                <p><strong>Tarif :</strong> <span class="discord fw-bold">De 590 à 2 000 euros</span></p>
                <ul>
                    <li>Design de base et mise en page</li>
                    <li>Création de pages essentielles (accueil, à propos, contact)</li>
                    <li>Intégration des éléments de marque (logo, couleurs)</li>
                    <li>Optimisation SEO de base</li>
                    <li>Formation pour la gestion du contenu</li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="tarif-details">
                <h2 class="tarif-title fw-bold">2. Site Web avec Fonctionnalités Avancées</h2>
                <p>Ces sites incluent des fonctionnalités supplémentaires comme des formulaires complexes, des galeries d'images, ou des options de personnalisation.</p>
                <p><strong>Tarif :</strong> <span class="discord fw-bold">De 2 200 à 5 000 euros</span></p>
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
                <p><strong>Tarif :</strong> <span class="discord fw-bold">De 4 000 à 8 500 euros</span></p>
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
                <p><strong>Tarif :</strong> <span class="discord fw-bold">De 7 000 à 18 000 euros</span></p>
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
                <p><strong>Tarif :</strong> <span class="discord fw-bold">De 50 à 200 euros</span> par mois</p>
                <ul>
                    <li>Mises à jour régulières</li>
                    <li>Sauvegardes</li>
                    <li>Support technique</li>
                </ul>
                
                <h3>Nom de Domaine</h3>
                <p><strong>Tarif :</strong> <span class="discord fw-bold">De 10 à 30 euros par an</span></p>
                <ul>
                    <li>Enregistrement et renouvellement du nom de domaine</li>
                </ul>

                <h3>Hébergement</h3>
                <p><strong>Tarif :</strong> <span class="discord fw-bold">De 50 à 200 euros</span> par an</p>
                <ul>
                    <li>Hébergement web</li>
                    <li>Support technique associé</li>
                </ul>

                <h3>Certificat SSL</h3>
                <p><strong>Tarif :</strong> <span class="discord fw-bold">Offert</span></p>
                <ul>
                    <li>Sécurisation des données échangées entre le site et ses visiteurs</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="images/robotTarifs2.png" alt="robot" class="img-fluid mx-auto w-50">
        </div>
    </div>
</section>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!-- Conteneur pour la vidéo pour écrans de bureau -->
        <div class="d-none d-md-block w-50">
            <video controls autoplay class="w-100">
                <source src="videos/robotCircuit.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la balise <code>video</code>.
            </video>
        </div>

        <!-- Conteneur pour la vidéo pour écrans mobiles -->
        <div class="d-block d-md-none video-container mt-5">
            <video controls autoplay>
                <source src="videos/robotCircuit.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la balise <code>video</code>.
            </video>
        </div>
    </div>

<section class="container tarifs-section text-white">
    <div class="text-center">
        <h1 class="border borderColor border-4 rounded p-2 mx-auto">
            <strong class="text-white">Tarifs pour la Création de Logo</strong>
        </h1>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="tarif-details">
                <h2 class="tarif-title fw-bold">1. Logo de Base</h2>
                <p>Pour les entreprises ou les individus qui ont besoin d'un logo simple, avec des éléments graphiques de base.</p>
                <p><strong>Tarif :</strong> <span class="discord fw-bold">De 150 à 500 euros</span></p>
                <ul>
                    <li>Conception de 1 à 2 propositions de logo</li>
                    <li>Révisions limitées (généralement 1 à 2)</li>
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
                    <li>Conception de 3 à 5 propositions de logo</li>
                    <li>Révisions supplémentaires (généralement 3 à 5)</li>
                    <li>Livraison des fichiers finaux en formats raster et vectoriels (AI, EPS, SVG)</li>
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
                    <li>Conception de 5 à 10 propositions de logo</li>
                    <li>Révisions illimitées</li>
                    <li>Livraison des fichiers finaux en formats raster et vectoriels (AI, EPS, SVG)</li>
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
                    <li>Livraison des fichiers finaux en formats raster et vectoriels (AI, EPS, SVG)</li>
                    <li>Guide de style complet avec applications variées</li>
                    <li>Support et conseils prolongés</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-6 text-center">
            <img src="images/robotTarifs3.png" alt="robot" class="img-fluid mx-auto w-25">
        </div>
    </div>
</section>

<div class="fw-bold text-center m-5 text-white press-start-2p-regular">
    Pour toute demande relative aux tarifs, nous vous prions de bien vouloir nous contacter.
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