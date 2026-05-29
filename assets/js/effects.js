/* ============================================
   Page One Insights — Effects
   Visual effects library
   ============================================ */

// Parallax, particle, and other visual effects can be added here

/* ── Ticker Strip — adaptive speed ──────────────────────────────────
   Reads the first .ticker-group width and sets --ticker-speed so the
   scroll is ~80 px/s regardless of viewport or content length.
   The @keyframes ends at translateX(-50%) because the track contains
   exactly 2 identical groups; moving -50% scrolls one full group width
   and then seamlessly loops back to the start.
──────────────────────────────────────────────────────────────────── */
function initTickers() {
  const strips = document.querySelectorAll('.ticker-strip');
  strips.forEach(function(strip) {
    const group = strip.querySelector('.ticker-group');
    if (!group) return;

    // Wait one frame so the browser has laid out the group
    requestAnimationFrame(function() {
      const contentWidth = group.scrollWidth;
      const pxPerSecond  = 80;
      const duration     = Math.max(20, Math.round(contentWidth / pxPerSecond));
      strip.style.setProperty('--ticker-speed', duration + 's');
    });
  });
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initTickers);
} else {
  initTickers();
}
