<?php
/* Template Name: Projets */
?> 
<?php get_header(); ?>


    <section class="projets">
        <div class="wrapper">
            <h1 data-scrolly="fromTop">Mes Projets!</h1>

            <div class="projetsContent">
                <img data-scrolly="fromLeft" src="<?php bloginfo('template_url'); ?>/assets/images/laFusée/hero.jpg" alt="photo profesionnel de moi" />
                <div data-scrolly="fromRight" class="projetsTxt">
                    <h3>La fusée</h3>
                    <h2>Blender, 3D, montage sonore</h2>
                    <p>Décollange d’une fusée dans l’espace. Elle va entrer dans l’hyper vitesse</p>
                    <a class="bouton" href="https://xperras.dectim.ca/la-fusee/">aller voir</a>
                </div>
            </div>
            <div class="projetsContent">
                <img data-scrolly="fromLeft" src="<?php bloginfo('template_url'); ?>/assets/images/leChateau.jpg" alt="photo profesionnel de moi" />
                <div data-scrolly="fromRight" class="projetsTxt">
                    <h3>Le Château</h3>
                    <h2>Blender, Video, suite adobe</h2>
                    <p>Un château dans un monde merveilleux. Voici un court moment du banquet!</p>
                    <a class="bouton" href="#">aller voir</a>
                </div>
            </div>

            <div class="projetsContent">
                <img data-scrolly="fromLeft" src="<?php bloginfo('template_url'); ?>/assets/images/imgTimTool.png" alt="photo profesionnel de moi" />
                <div data-scrolly="fromRight" class="projetsTxt">
                    <h3>TimTools</h3>
                    <h2>Web, html, css, js</h2>
                    <p>
                        TimTools est une boîte à outils JavaScript visant à simplifier le développement en offrant des
                        solutions optimisées pour améliorer la productivité, la performance.
                    </p>
                    <a class="bouton" href="#">aller voir</a>
                </div>
            </div>

            <div class="projetsContent">
                <img data-scrolly="fromLeft" src="<?php bloginfo('template_url'); ?>/assets/images/webjam.jpg" alt="photo profesionnel de moi" />
                <div data-scrolly="fromRight" class="projetsTxt">
                    <h3>WebJam</h3>
                    <h2>Web, html, css, js, php</h2>
                    <p>Événement académique. Participation au webjam 2024. Création d’un site web en moins de 48h!</p>
                    <a class="bouton" href="projet.html">aller voir</a>
                </div>
            </div>
            <div class="projetsContent">
                <img data-scrolly="fromLeft" src="<?php bloginfo('template_url'); ?>/assets/images/imgTimTool.png" alt="photo profesionnel de moi" />
                <div data-scrolly="fromRight" class="projetsTxt">
                    <h3>nom de projet</h3>
                    <h2>Description technique</h2>
                    <p>
                        courte descritpion /Événement académique. Participation au webjam 2024. Création d’un site web en
                        moins de 48h!
                    </p>
                    <a class="bouton" href="projet.html">aller voir</a>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>