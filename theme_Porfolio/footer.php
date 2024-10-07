
<section class="footer ">
        <div class="wrapper">
            <div class="head-footer">
                <a data-scrolly='fromBottom' href="https://xperras.dectim.ca" class="header__brand">
                    <h2>Xavier Perras</h2>
                </a>


                <nav data-scrolly='fromBottom' class="nav-footer">
                <nav data-scrolly='fromRight' class="nav-primary"><?php wp_nav_menu(array(
                'theme_location' => 'menu_principal',
                'container' => 'ul',//create a balise nav
               
            )); ?>
                   
                </nav>
                </nav>

            </div>
            <p data-scrolly='fromBottom'>Tout droit réservé</p>
        </div>
    </section>
<?php wp_footer(); ?>
    </body>
</html>