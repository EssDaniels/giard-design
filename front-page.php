<?php get_header(); ?>

<?php


$gallery_html = get_post_gallery(get_option('page_on_front'), false);
$image_ids = [];

if (isset($gallery_html['ids'])) {
  $ids = explode(',', $gallery_html['ids']);

  // Potrójny układ ID
  $image_ids = array_merge($ids, $ids, $ids);
}

$initial_images = array_slice($image_ids, 0, 10);
$additional_images = array_slice($image_ids, 10);

?>
<section class="hero">
  <div class="container">
    <div class="slick-custom">
      <div class="slick-custom-wrapper">
        <div class="slick-custom-slide">
          <div class="d-flex hero__wrapper">
            <div class="hero__description">
              <h1>Nowoczesna aranżacja
                Twojego ogrodu</h1>
              <p>Marka GiardDesign to wieloletnie doświadczenie i wysoka estetyka realizacji. Oferujemy kompleksowy zakres usługz indywidualnym podejściem do każdego projektu.</p>
              <div class="hero__buttons">
                <a href="#" class="button button--green button--text-grey">Skontaktuj się z nami</a>
                <a href="#realizacje" class="button button--border-green button--arrow-green button--arrow-down scroll-to-section-js">Zobacz nasze realizacje</a>
              </div>
            </div>
            <div class="hero__images" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider1.jpg')">
            </div>
          </div>
        </div>
        <div class="slick-custom-slide">
          <div class="d-flex hero__wrapper">
            <div class="hero__description">
              <h1>Tworzymy z pasją</h1>
              <p>Oferujemy kompletną obsługę inwestycji terenów zielonych. Projektujemy nowoczesne ogrody przydomowe oraz rezydencjonalne. Stworzymy dla Ciebie projekt, zwizualizujemy go i wcielimy w życie, a na każdym etapie posłużymy radą i wieloletnim doświadczeniem. </p>
              <div class="hero__buttons">
                <a href="#" class="button button--green button--text-grey">Skontaktuj się z nami</a>
                <a href="#realizacje" class="button button--border-green button--arrow-green button--arrow-down scroll-to-section-js">Zobacz nasze realizacje</a>
              </div>
            </div>
            <div class="hero__images" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide2.jpg')">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="offer">
  <div class="container">
    <div class="row offer__title">
      <div class="col-md-7 offset-md-1">
        <span class="category">Oferta</span>
        <h2>Działamy <span>kompleksowo</span></h2>
        <p>Oferujemy kompletną obsługę inwestycji terenów zielonych. Projektujemy nowoczesne ogrody przydomowe oraz rezydencjonalne. Stworzymy dla Ciebie projekt, zwizualizujemy go i wcielimy w życie, a na każdym etapie posłużymy radą i wieloletnim doświadczeniem. </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img class="card__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pen.png">
          <h3>Projekty</h3>
          <p class="small">Zaprojektujemy Twój ogród w nowoczesnym stylu i z najlepszym wykorzystaniem istniejącej przestrzeni.</p>
          <a href="" class="button--arrow-green">Dowiedz się więcej</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/eye.png">
          <h3>Wizualizacje</h3>
          <p class="small">Przedstawimy Ci projekty koncepcyjne w postaci wirtualnego spaceru animowanego w technologii 3D.</p>
          <a href="" class="button--arrow-green">Dowiedz się więcej</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/stars.png">
          <h3>Realizacje</h3>
          <p class=" small">Zrealizujemy Twoje marzenie przy użyciu najnowszych rozwiązań i zaawansowanych technologii.</p>
          <a href="" class="button--arrow-green">Dowiedz się więcej</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="about about__img" id="about-js">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ">
      </div>
      <div class="col-md-6 about__description">
        <span class="category">O firmie</span>
        <h2>Tworzymy z <span>pasją</span></h2>
        <p>Każdy projekt to nowe wyzwanie. Dlatego nasz zespół tworzą wykwalifikowani projektanci oraz architekci, których zadaniem jest rozpoznanie i realizacja potrzeb każdego Klienta. Nasza specjalizacja to przestrzenie nowoczesne, które charakteryzuje minimalizm, geometria i elegancka prostota. Tworzymy ogrody małoobsługowe, dostosowane do współczesnego trybu życia.</p>
        <a href="#" class="button button--transparent button--border-grey button--arrow-grey">Poznaj nas bliżej</a>
      </div>
    </div>
  </div>
</section>
<section class="realizations" id="realizacje">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <span class="category">Realizacje</span>
        <h2>Nasze <span>projekty</span></h2>
      </div>
    </div>
    <div class="masonry-gallery">
      <?php foreach ($initial_images  as $index => $image_id) : ?>
        <div class="masonry-item">
          <?php
          $full_image_url = wp_get_attachment_image_url($image_id, 'full');
          $medium_image = wp_get_attachment_image($image_id, 'medium');
          ?>
          <a href="<?php echo $full_image_url; ?>" data-lightbox="gallery" data-title="Opis obrazu (jeśli potrzebujesz)">
            <?php echo $medium_image; ?>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="realizations__gradient">
      <button id="loadMore" class="button button--border-black button--arrow-black">Rozwiń</button>
    </div>
  </div>
</section>
<section class="contact" id="contact-js">
  <div class="container">
    <div class="row">
      <div class="col-10 offset-1">
        <div class="row contact__wrapper">
          <div class="col-md-7 offset-1 contact__title">
            <h2 class="small">Zostańmy w kontakcie! Znajdziesz nas na <span>Instagramie</span></h2>
          </div>
          <div class="col-md-2">
            <p class="small">Śledź nasze najnowsze realizacje!</p>
            <a href="#" class="button button--grey button--text-green">Instagram</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>