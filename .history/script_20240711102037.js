const chars = '01';
    const specialText = 'HarmonyDigital';
    const lineCount = 30; // Nombre de lignes de lettres et chiffres
    const charsPerLine = 450; // Nombre de caractères par ligne

    function createStarLines() {
      const starContainer = document.getElementById('star-container');
      if (!starContainer) return; // S'assurer que l'élément existe

      for (let i = 0; i < lineCount; i++) {
        const line = document.createElement('div');
        line.className = 'star-line';

        let j = 0;
        while (j < charsPerLine) {
          if (j % Math.floor(charsPerLine / specialText.length) === 0 && j + specialText.length <= charsPerLine) {
            for (let k = 0; k < specialText.length; k++) {
              const specialChar = specialText.charAt(k);
              const span = document.createElement('span');
              span.textContent = specialChar;
              span.className = 'star';
              span.style.animationDelay = `${Math.random() * 850}s`; // Délai d'animation aléatoire
              line.appendChild(span);
              j++;
            }
          } else {
            const char = chars.charAt(Math.floor(Math.random() * chars.length));
            const span = document.createElement('span');
            span.textContent = char;
            span.className = 'star';
            span.style.animationDelay = `${Math.random() * 550}s`; // Délai d'animation aléatoire
            line.appendChild(span);
            j++;
          }
        }

        starContainer.appendChild(line); // Ajouter la ligne uniquement à l'élément spécial
      }
    }

    // Générer les lignes de lettres et chiffres scintillants au chargement de la page
    document.addEventListener('DOMContentLoaded', createStarLines);