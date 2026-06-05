// Bull Auto - Global app behavior
(function () {
  'use strict';

  // ---- Theme toggle ----
  const STORAGE_KEY = 'ba-theme';
  const root = document.documentElement;

  function applyTheme(t) {
    if (t === 'dark') root.setAttribute('data-theme', 'dark');
    else root.removeAttribute('data-theme');
    const icons = document.querySelectorAll('.theme-toggle i');
    icons.forEach(i => {
      i.className = t === 'dark' ? 'bi bi-sun' : 'bi bi-moon';
    });
  }

  const saved = localStorage.getItem(STORAGE_KEY) || 'light';
  applyTheme(saved);

  document.addEventListener('click', function (e) {
    const t = e.target.closest('.theme-toggle');
    if (!t) return;
    const next = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
    localStorage.setItem(STORAGE_KEY, next);
    applyTheme(next);
  });

  // ---- Mobile sidebar ----
  document.addEventListener('click', function (e) {
    const toggle = e.target.closest('.menu-toggle');
    const sidebar = document.querySelector('.ba-sidebar');
    const backdrop = document.querySelector('.ba-backdrop');
    if (toggle && sidebar) {
      sidebar.classList.toggle('open');
      if (backdrop) backdrop.classList.toggle('show');
      return;
    }
    if (e.target.classList && e.target.classList.contains('ba-backdrop')) {
      if (sidebar) sidebar.classList.remove('open');
      e.target.classList.remove('show');
    }
  });

  // ---- Smooth in-page anchor scroll ----
  document.addEventListener('click', function (e) {
    const a = e.target.closest('a[href^="#"]');
    if (!a) return;
    const id = a.getAttribute('href');
    if (id.length > 1) {
      const target = document.querySelector(id);
      if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth' }); }
    }
  });

  // ---- Year ----
  const y = document.querySelectorAll('[data-year]');
  y.forEach(n => n.textContent = new Date().getFullYear());
})();
