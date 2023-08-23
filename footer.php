<footer class="footer">
  <div class="container">
    <div class="row footer__logo-wrapper">
      <div class="col-md-6 d-flex align-items-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/giarddesign.svg" alt=""></div>
      <div class="col-md-6 d-flex align-items-center justify-content-end">
        <p>Daj znać, co możemy dla Ciebie zrobić!</p>
        <a href="#" class="button button--green button--text-grey">Skontaktuj się z nami</a>
      </div>
    </div>
    <div class="row footer__menu-social">
      <div class="col-md-6"><?php wp_nav_menu(['theme_location' => 'secondary_menu']); ?></div>
      <div class="col-md-6 d-flex justify-content-end align-items-center"><a href="tel:000-000-000">000-000-000</a><a href="mailto:giarddesign@kontakt.pl">giarddesign@kontakt.pl</a></div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p>Prawa zastrzeżone © 2022</p>
      </div>
      <div class="col-md-6 d-flex justify-content-end align-items-center">
        <span class="footer__made-by">made by</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-full-light.png" alt="">
      </div>
    </div>
  </div>
</footer>

<?php wp_footer() ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/macy/2.3.2/macy.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>

</html>