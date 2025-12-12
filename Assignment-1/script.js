document.addEventListener('DOMContentLoaded', function(){

  // Mobile nav toggle
  const navToggle = document.getElementById('nav-toggle');
  const navLinks = document.getElementById('nav-links');

  if(navToggle && navLinks){
    navToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  }

  // Print buttons
  const printButtons = document.querySelectorAll('.print-btn');
  printButtons.forEach(button => {
    button.addEventListener('click', () => {
      window.print();
    });
  });

  // Scroll animations
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.15 });

  const animatedElements = document.querySelectorAll('.animate-up');
  animatedElements.forEach(el => observer.observe(el));

});
