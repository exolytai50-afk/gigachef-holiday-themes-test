document.addEventListener('DOMContentLoaded', () => {
  const snowLayer = document.getElementById('snow-layer');
  if (!snowLayer) return;

  const flakes = 34;

  for (let i = 0; i < flakes; i++) {
    const flake = document.createElement('span');
    flake.className = 'snow-flake';
    const size = (Math.random() * 8 + 4).toFixed(2);
    const left = (Math.random() * 100).toFixed(2) + '%';
    const delay = (Math.random() * 12).toFixed(2) + 's';
    const duration = (Math.random() * 12 + 10).toFixed(2) + 's';
    const dx = ((Math.random() * 180 - 90)).toFixed(2) + 'px';

    flake.style.width = size + 'px';
    flake.style.height = size + 'px';
    flake.style.left = left;
    flake.style.animationDelay = delay;
    flake.style.animationDuration = duration;
    flake.style.setProperty('--dx', dx);
    snowLayer.appendChild(flake);
  }
});
