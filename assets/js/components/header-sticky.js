// import lightbox from './../../../node_modules/lightbox2/dist/js/lightbox.min.js';


export default function headerSticky() {
  (function ($) {
    window.addEventListener('scroll', function() {
      const header = document.querySelector('.header');
      if (window.pageYOffset > 0) {
          header.classList.add('sticky');
      } else {
          header.classList.remove('sticky');
      }
  });
    
})(jQuery);
}