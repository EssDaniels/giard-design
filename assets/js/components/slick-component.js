// import lightbox from './../../../node_modules/lightbox2/dist/js/lightbox.min.js';


export default function slickComponent() {
  (function ($) {

    $('.slick-custom-wrapper').slick({
      dots: true,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear'
    });
        
    
})(jQuery);
}