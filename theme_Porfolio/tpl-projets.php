<?php
/* Template Name: Projets */
?> 
<?php get_header(); ?>


<section class="projets">
    <div class="wrapper">
        <h1 class="title" data-scrolly="fromTop">Mes Projets!</h1>

        <div class="projetsContent">
            <img data-scrolly="fromLeft" src="<?php bloginfo('template_url'); ?>/dist/assets/images/laFusee/hero.jpg" alt="Décollage d’une fusée dans l’espace" />
            <div data-scrolly="fromRight" class="projetsTxt">
                <h3>La fusée</h3>
                <h2>Blender, 3D, montage sonore</h2>
                <p>Décollage d’une fusée dans l’espace. Elle entre dans l’hyper vitesse.</p>
                <a class="bouton" href="https://xperras.dectim.ca/la-fusee/">Voir le projet</a>
            </div>
        </div>

        <div class="projetsContent">
            <img data-scrolly="fromLeft" src="<?php bloginfo('template_url'); ?>/dist/assets/images/leChateau.jpg" alt="Château merveilleux pendant le banquet" />
            <div data-scrolly="fromRight" class="projetsTxt">
                <h3>Le Banquet</h3>
                <h2>Blender, vidéo, suite Adobe</h2>
                <p>Un château dans un monde merveilleux. Voici un court moment du banquet !</p>
                <a class="bouton" href="https://xperras.dectim.ca/chateau/">Voir le projet</a>
            </div>
        </div>

        <div class="projetsContent">
            <img data-scrolly="fromLeft" src="<?php bloginfo('template_url'); ?>/dist/assets/images/imgTimTool.png" alt="Boîte à outils TimTools" />
            <div data-scrolly="fromRight" class="projetsTxt">
                <h3>TimTools</h3>
                <h2>Web, HTML, CSS, JS</h2>
                <p>
                    TimTools est une boîte à outils JavaScript visant à simplifier le développement en offrant des solutions optimisées pour améliorer la productivité et la performance.
                </p>
                <a class="bouton" href="https://xperras.dectim.ca/timtools">Voir le projet</a>
            </div>
        </div>

        <div class="projetsContent">
            <img data-scrolly="fromLeft" src="<?php bloginfo('template_url'); ?>/dist/assets/images/webjam.jpg" alt="Participation au WebJam 2024" />
            <div data-scrolly="fromRight" class="projetsTxt">
                <h3>WebJam</h3>
                <h2>Web, HTML, CSS, JS, PHP</h2>
                <p>Participation au WebJam 2024. Création d’un site web en moins de 48 heures!</p>
                <a class="bouton" href="https://xperras.dectim.ca/webjam/">Voir le projet</a>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>
