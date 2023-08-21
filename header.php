<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>giard design</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
</head>

<body>
    <header class="header">
        <div class="header__wrapper">
            <div class="header__logo"></div>
            <div class="header__menu">
                <?php wp_nav_menu(['theme_location' => 'main_menu']); ?>
            </div>
        </div>
    </header>