<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php wp_title('|', true, 'right');
            bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/styles/main.css">
    <script defer>
        iconsPath = '<?php bloginfo('template_url'); ?>/dist/';
        console.log(iconsPath); // Check if the path is correct
    </script>
    <script src="<?php bloginfo('template_url'); ?>/dist/scripts/main.js" defer></script>
</head>

<body <?php body_class(); ?> data-component="Scrolly">
<div id="loading-screen">
        <div class="spinner"></div>
        <h1>X<span>avier</span><span>&nbsp;</span>P<span>erras</span></h1>
        <script src="scripts/components/LoadingScreen.js"></script>
    </div>
    <div id="content">
    <header class="header" data-component="Header">
        <div class="wrapper">
            <div class="head">
                <a href="https://xperras.dectim.ca" class="header__brand">
                    <h2 data-scrolly='fromLittle'>X<span>avier</span><span>&nbsp;</span>P<span>erras</span></h2>
                </a>



                <nav data-scrolly='fromRight' class="nav-primary"><?php wp_nav_menu(array(
                                                                        'theme_location' => 'menu_principal',
                                                                        'container' => 'ul', //create a balise nav

                                                                    )); ?>

                </nav>
                <button data-scrolly='fromReverse' class="header__toggle js-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>