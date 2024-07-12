const chars = '01';

function createStarLines() {
  const lineCount = 30; // Nombre de lignes de lettres et chiffres
  const charsPerLine = 10; // Nombre de caractères par ligne

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
