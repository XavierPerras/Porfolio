<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/main.css">
    <script>
        iconsPath = '<?php bloginfo('template_url'); ?>/';
    </script>
    <script src="<?php bloginfo('template_url'); ?>/scripts/main.js" defer></script>
</head>
<body <?php body_class(); ?> data-component="Scrolly" > 


<header class="header" data-component="Header">
        <div class="wrapper">
            <div class="head">
                <a data-scrolly='fromLeft' href="https://xperras.dectim.ca" class="header__brand">
                    <h2>Xavier Perras</h2>
                </a>

                

                <nav data-scrolly='fromRight' class="nav-primary"><?php wp_nav_menu(array(
                'theme_location' => 'menu_principal',
                'container' => 'ul',//create a balise nav
               
            )); ?>
                   
                </nav>
                <button data-scrolly="fromRight" class="header__toggle js-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>