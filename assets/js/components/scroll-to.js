// import lightbox from './../../../node_modules/lightbox2/dist/js/lightbox.min.js';


export default function scrollTo() {
  (function ($) {

      jQuery(document).ready(function($) {
          $('.scroll-to-section-js, .scroll-to-section-js > a').on('click', function(e) {
              e.preventDefault(); // Zapobiegaj domyślnemu działaniu linku

              var target;

              // Jeśli kliknięto bezpośrednio w link
              if ($(this).is('a')) {
                  target = $(this).attr('href');
              }
              // Jeśli kliknięto w <li> z klasą .scroll-to-section-js
              else {
                  target = $(this).find('a').attr('href');
              }
              
              var offsetTop = $(target).offset().top;

              $('html, body').animate({
                  scrollTop: offsetTop
              }, 1000); // 1000ms = 1s to czas animacji
          });
      });

  })(jQuery);
}
