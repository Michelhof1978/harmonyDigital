const chars = '01';

function createStarLines() {
  const lineCount = 230; // Nombre de lignes de lettres et chiffres
  const charsPerLine = 250; // Nombre de caractères par ligne
  const specialText = 'HarmonyDigital';

  const starContainer = document.getElementById('star-container');
  if (!starContainer) return; // S'assurer que l'élément existe

  for (let i = 0; i < lineCount; i++) {
    const line = document.createElement('div');
    line.className = 'star-line';

    for (let j = 0; j < charsPerLine; j++) {
      let char;
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
        char = chars.charAt(Math.floor(Math.random() * chars.length));
        const span = document.createElement('span');
        span.textContent = char;
        span.className = 'star';
        span.style.animationDelay = `${Math.random() * 550}s`; // Délai d'animation aléatoire
        line.appendChild(span);
      }
    }

    starContainer.appendChild(line); // Ajouter la ligne uniquement à l'élément spécial
  }
}

// Générer les lignes de lettres et chiffres scintillants au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
  createStarLines();
});
