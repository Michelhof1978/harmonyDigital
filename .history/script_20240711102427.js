const chars = '01';
const charCount = 1000; // Nombre de caractères à afficher

function createRandomChars() {
  const starContainer = document.getElementById('star-container');
  if (!starContainer) return; // S'assurer que l'élément existe

  const width = window.innerWidth;
  const height = window.innerHeight;

  for (let i = 0; i < charCount; i++) {
    const char = chars.charAt(Math.floor(Math.random() * chars.length));
    const span = document.createElement('span');
    span.textContent = char;
    span.className = 'star';
    span.style.left = `${Math.random() * width}px`;
    span.style.top = `${Math.random() * height}px`;
    span.style.animationDelay = `${Math.random() * 850}s`; // Délai d'animation aléatoire
    starContainer.appendChild(span);
  }
}

// Générer les caractères aléatoires au chargement de la page
document.addEventListener('DOMContentLoaded', createRandomChars);