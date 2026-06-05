// Bull Auto - Lightweight inline SVG chart helpers (no external deps)
(function () {
  'use strict';

  function rand(min, max) { return Math.round(min + Math.random() * (max - min)); }

  function buildPath(values, w, h, padding) {
    const max = Math.max.apply(null, values);
    const min = Math.min.apply(null, values);
    const stepX = (w - padding * 2) / (values.length - 1);
    const range = (max - min) || 1;
    return values.map(function (v, i) {
      const x = padding + i * stepX;
      const y = h - padding - ((v - min) / range) * (h - padding * 2);
      return (i === 0 ? 'M' : 'L') + x.toFixed(1) + ',' + y.toFixed(1);
    }).join(' ');
  }

  function renderLine(el, values, color) {
    const w = el.clientWidth || 600;
    const h = el.clientHeight || 260;
    const p = 18;
    const path = buildPath(values, w, h, p);
    const area = path + ' L' + (w - p) + ',' + (h - p) + ' L' + p + ',' + (h - p) + ' Z';
    el.innerHTML =
      '<svg viewBox="0 0 ' + w + ' ' + h + '" preserveAspectRatio="none">' +
        '<defs><linearGradient id="g' + Math.random().toString(36).slice(2) + '" x1="0" x2="0" y1="0" y2="1">' +
          '<stop offset="0%" stop-color="' + color + '" stop-opacity=".35"/>' +
          '<stop offset="100%" stop-color="' + color + '" stop-opacity="0"/>' +
        '</linearGradient></defs>' +
        '<path d="' + area + '" fill="' + color + '" fill-opacity=".15"/>' +
        '<path d="' + path + '" fill="none" stroke="' + color + '" stroke-width="2.5" stroke-linejoin="round"/>' +
      '</svg>';
  }

  function renderBars(el, values, color) {
    const w = el.clientWidth || 600;
    const h = el.clientHeight || 260;
    const p = 18;
    const max = Math.max.apply(null, values);
    const bw = (w - p * 2) / values.length - 6;
    let svg = '<svg viewBox="0 0 ' + w + ' ' + h + '" preserveAspectRatio="none">';
    values.forEach(function (v, i) {
      const bh = ((v / max) * (h - p * 2));
      const x = p + i * (bw + 6);
      const y = h - p - bh;
      svg += '<rect x="' + x + '" y="' + y + '" width="' + bw + '" height="' + bh + '" rx="4" fill="' + color + '"/>';
    });
    svg += '</svg>';
    el.innerHTML = svg;
  }

  function init() {
    document.querySelectorAll('.ba-chart').forEach(function (el) {
      const type = el.dataset.chart || 'line';
      const color = el.dataset.color || '#0b5fff';
      const count = parseInt(el.dataset.count || '12', 10);
      const values = [];
      for (let i = 0; i < count; i++) values.push(rand(20, 100));
      if (type === 'bar') renderBars(el, values, color);
      else renderLine(el, values, color);
    });
  }

  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
  else init();
  window.addEventListener('resize', init);
})();
