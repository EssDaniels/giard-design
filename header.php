<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>giard design</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body>
    <header class="header">
        <div class="container header__wrapper">
            <div class="header__logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>
            <div class="hamburger-menu open">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="header__menu js-nav-wrapper">
                <?php wp_nav_menu(['theme_location' => 'main_menu']); ?>
            </div>
        </div>
    </header>