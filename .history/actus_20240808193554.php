<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("head.php"); ?>
    <meta name="informations" content="">
    <title>Votre Titre</title>
  
    <style>
       
    </style>
</head>
<body>
    <?php include("header.php"); ?>

    

    <?php include("footer.php"); ?>

    <script>
        const numParticles = 100; // Nombre total de particules
        const binaryBackground = document.getElementById('binary-background');
        const characters = ['0', '1'];

        function createParticle() {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.textContent = characters[Math.floor(Math.random() * characters.length)];
            particle.style.left = `${Math.random() * 100}vw`;
            particle.style.top = `${Math.random() * 100}vh`;
            
            // Définir une animation unique pour chaque particule
            particle.style.animation = `move ${Math.random() * 30 + 25}s linear infinite`;
            
            binaryBackground.appendChild(particle);
        }

        for (let i = 0; i < numParticles; i++) {
            createParticle();
        }

        window.addEventListener('resize', () => {
            binaryBackground.innerHTML = '';
            for (let i = 0; i < numParticles; i++) {
                createParticle();
            }
        });
    </script>
</body>
</html>
