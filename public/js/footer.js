
document.addEventListener('DOMContentLoaded', function() {
  const footer = document.querySelector('.footer');
  if (!footer) return;
  const observer = new IntersectionObserver(
    ([entry]) => {
      if (entry.isIntersecting) {
        footer.classList.add('footer-visible');
     } else {
        footer.classList.remove('footer-visible');
      }
    },
    { threshold: 0.1 }
  );
  observer.observe(footer);
});
