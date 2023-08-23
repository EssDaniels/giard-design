
import $ from 'jquery';
import dropdown from './components/dropdown';
import masonryComponent from './components/masonry';
import loadImagesAjax from './components/load-images-ajax';
import scrollTo from './components/scroll-to';
import LightboxComponent from './components/lihgtbox';
import slickComponent from './components/slick-component';
import { macyInstance } from './components/masonry';
import headerSticky from './components/header-sticky';
import essHamburger from './components/hamburger';


(function ($) {

  // jQuery test
  if (window.jQuery) {
      console.log('jQuery is working...');
  }

})(jQuery);


var documentReady = function () {
 
  dropdown();
  scrollTo();
  LightboxComponent();
  slickComponent();
  masonryComponent();
  loadImagesAjax();
  headerSticky();
  essHamburger();
}


if (
  document.readyState === "complete" ||
  (document.readyState !== "loading" && !document.documentElement.doScroll)
) {
  documentReady();
} else {
  document.addEventListener("DOMContentLoaded", documentReady);
}


export { macyInstance };
