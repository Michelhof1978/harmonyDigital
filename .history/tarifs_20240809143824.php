<!DOCTYPE html>
<html lang="fr">
<head>
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
    </style>
</head>
<body>
    <?php include("header.php"); ?>

    <div id="binary-background"></div>

    <section class="container tarifs-section text-white">
        
        <div class="mt-5">
    <h1 class="border borderColor border-4 rounded p-2 col m-4 text-center">
        <strong class="text-white">Tarifs pour la Création de Site Web</strong>
    </h1>
</div>
        <div class="row ">
            <!-- Site Web Vitrine -->
            <div class="col-md-6">
                <div class="tarif-details">
                    <h2 class="tarif-title">1. Site Web Vitrine</h2>
                    <p>Un site vitrine est conçu pour présenter des informations de manière simple et efficace. Idéal pour les petites entreprises ou les professionnels souhaitant une présence en ligne de base.</p>
                    <p><strong>Tarif :</strong> De 590 à 2 000 euros</p>
                    <ul>
                        <li>Design de base et mise en page</li>
                        <li>Création de pages essentielles (accueil, à propos, contact)</li>
                        <li>Intégration des éléments de marque (logo, couleurs)</li>
                        <li>Optimisation SEO de base</li>
                        <li>Formation pour la gestion du contenu</li>
                    </ul>
                </div>
            </div>

            <!-- Site Web avec Fonctionnalités Avancées -->
            <div class="col-md-6">
                <div class="tarif-details">
                    <h2 class="tarif-title">2. Site Web avec Fonctionnalités Avancées</h2>
                    <p>Ces sites incluent des fonctionnalités supplémentaires comme des formulaires complexes, des galeries d'images, ou des options de personnalisation.</p>
                    <p><strong>Tarif :</strong> De 2 200 à 5 000 euros</p>
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
            <!-- Site Web E-commerce -->
            <div class="col-md-6">
                <div class="tarif-details">
                    <h2 class="tarif-title">3. Site Web E-commerce</h2>
                    <p>Pour les projets nécessitant des fonctionnalités de vente en ligne, comme les paiements en ligne, la gestion des stocks, et le suivi des commandes.</p>
                    <p><strong>Tarif :</strong> De 4 000 à 8 500 euros</p>
                    <ul>
                        <li>Configuration de la boutique en ligne</li>
                        <li>Intégration des systèmes de paiement sécurisés</li>
                        <li>Gestion des stocks et des produits</li>
                        <li>Optimisation pour les conversions et SEO</li>
                        <li>Formation pour la gestion des commandes et du catalogue</li>
                    </ul>
                </div>
            </div>

            <!-- Site Web sur Mesure -->
            <div class="col-md-6">
                <div class="tarif-details">
                    <h2 class="tarif-title">4. Site Web sur Mesure</h2>
                    <p>Pour les projets nécessitant des fonctionnalités totalement personnalisées ou des intégrations spécifiques.</p>
                    <p><strong>Tarif :</strong> De 7 000 à 18 000 euros</p>
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

        <!-- Services Complémentaires -->
        <div class="row">
            <div class="col-md-6">
                <div class="tarif-details">
                    <h2 class="tarif-title">5. Services Complémentaires</h2>
                    <h3>Maintenance et Support</h3>
                    <p><strong>Tarif :</strong> De 50 à 200 euros par mois</p>
                    <ul>
                        <li>Mises à jour régulières</li>
                        <li>Sauvegardes</li>
                        <li>Support technique</li>
                    </ul>
                    
                    <h3>Nom de Domaine</h3>
                    <p><strong>Tarif :</strong> De 10 à 30 euros par an</p>
                    <ul>
                        <li>Enregistrement et renouvellement du nom de domaine</li>
                    </ul>

                    <h3>Hébergement</h3>
                    <p><strong>Tarif :</strong> De 50 à 200 euros par an</p>
                    <ul>
                        <li>Hébergement web</li>
                        <li>Support technique associé</li>
                    </ul>

                    <h3>Certificat SSL</h3>
                    <p><strong>Tarif :</strong> Offert</p>
                    <ul>
                        <li>Sécurisation des données échangées entre le site et ses visiteurs</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>

    
</body>
</html>
