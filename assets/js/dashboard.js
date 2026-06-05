// Bull Auto - Dashboard interactions (small enhancements)
(function () {
  'use strict';
  // Highlight current page in sidebar based on filename
  const file = (location.pathname.split('/').pop() || 'dashboard.html').toLowerCase();
  document.querySelectorAll('.ba-sidebar .nav-link').forEach(function (a) {
    const href = (a.getAttribute('href') || '').toLowerCase();
    if (href && href.endsWith(file)) a.classList.add('active');
  });
})();
