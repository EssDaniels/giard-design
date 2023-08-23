// import lightbox from './../../../node_modules/lightbox2/dist/js/lightbox.min.js';
import { macyInstance } from './../main.js'; 


export default function loadImagesAjax() {
  (function ($) {
    jQuery(document).ready(function($) {
      $('#loadMore').on('click', function() {
          var ids = [];
  
          $.ajax({
              type: 'POST',
              url: ess_object.ajax_url,
              data: {
                  action: 'load_more_images',
                  ids: ids
              },
              success: function(response) {
                var urls = JSON.parse(response);
                var galleryContainer = $('.masonry-gallery');
                var imagesLoaded = 0;
            
                $.each(urls, function(index, url) {
                    var fullImageLink = $('<a>').attr('href', url).attr('data-lightbox', 'gallery'); // Tworzymy link do pełnego obrazu z atrybutami dla lightbox
                    var img = $('<img>').attr('src', url).on('load', function() {
                        imagesLoaded++;
                        if(imagesLoaded === urls.length) {
                            macyInstance.recalculate(true);
                            macyInstance.recalculate(true);
                            $('.realizations__gradient').hide();
                        }
                    });
            
                    fullImageLink.append(img); // Dodajemy obraz do linku
            
                    var masonryItem = $('<div>').addClass('masonry-item fade-in').append(fullImageLink);
                    masonryItem.on('animationend', function() {
                        $(this).removeClass('fade-in');
                    });
                    galleryContainer.append(masonryItem);
                });
            
                // Ukryj przycisk po załadowaniu wszystkich obrazów
                $('#loadMore').hide();
            },
            error: function() {
                  alert('Wystąpił błąd podczas ładowania zdjęć.');
              }
          });
      });
  });
  
  
    
})(jQuery);
}