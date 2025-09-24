const hamburger = document.getElementById('hamburger');
  const nav = document.getElementById('nav');

  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    nav.classList.toggle('show');
    hamburger.setAttribute('aria-expanded', String(hamburger.classList.contains('active')));
  });

  document.addEventListener('click', (e) => {
    if (!hamburger.contains(e.target) && !nav.contains(e.target)) {
      hamburger.classList.remove('active');
      nav.classList.remove('show');
      hamburger.setAttribute('aria-expanded', 'false');
    }
  });