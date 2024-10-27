<?php
/* Template Name: timtools */
?>
<?php get_header(); ?>

<section class="projet">
    <div class="wrapper">
        <div class="projetHero">
        <div class="projetVideo">
            <iframe width="100%"
            height="100%" src="https://www.youtube.com/embed/vUSTvtKtXcM?si=UCRg7eao2vX8RyEH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
            <div data-scrolly="fromRight" class="projetHerotxt">
                <div class="heroHead">
                    <div> <h1>TimTools</h1><p>Projet réalisé en 2023</p></div>
                   
                    <h2>Web | Projet Étudiant</h2>
                    <p>Ma boîte à outils est une plateforme en ligne que j'ai créée pour améliorer ma productivité.</p>
                </div>
                <div class="herotxt">
                    <p>Réalisé par : moi-même</p>
                    
                    <p>Tous les composants ont été créés par moi !</p>
                </div>
                <div class="projetLog">
                    <h4>Logiciels que j’ai utilisés :</h4>
                    <div class="projetlogIcon">
                        <div class="item">
                            <svg class="icon icon--lg">
                                <use xlink:href="#icon-vsCode"></use>
                            </svg>
                            <p>VS code</p>
                        </div>
                    </div>
                </div>
                <a class="bouton" target="_blank" href="https://xperras.dectim.ca/toolbox" href='target'>Voir le site !</a>
            </div>
        </div>
    </div>
</section>

<section class="wrapper">
    <div class="swiper projetContent" data-gap="120" data-loop="loop" data-autoplay="4000" data-component="Carousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="inspiration">
                    <div class="projetContentTxt">
                        <h3>Le contexte !</h3>
                        <p>
                            Dans le cadre de ma formation, j'ai développé un site web mettant en lumière les compétences acquises au cours de mes études. Le projet présente des exemples concrets tels que l’effet <strong>"scrolly"</strong> pour des <strong>transitions fluides</strong>, un en-tête fixe pour une <strong>navigation intuitive</strong>, ainsi que des <strong>sections dynamiques</strong>. Ce site démontre mes aptitudes en <strong>HTML</strong>, <strong>CSS</strong> et <strong>JavaScript</strong>, tout en intégrant des <strong>animations interactives</strong> et des <strong>mises en page réactives</strong>. J’ai conçu l’ensemble pour qu’il soit à la fois <strong>esthétique</strong> et <strong>fonctionnel</strong>, offrant une expérience d'exploration enrichissante.
                        </p>
                    </div>
                    <div class="projetContentImg">
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/timtools/accueilTimTool.png" alt="" />
                            <p>image de l'accueil</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="inspiration">
                    <div class="projetContentTxt">
                        <h3>Carousel</h3>
                        <p>
                            Le composant <b>Carousel</b> permet d'afficher plusieurs éléments visuels dans un espace limité grâce à un effet de défilement horizontal. Grâce à la technique du <b>scrolly</b>, l’expérience utilisateur est enrichie en synchronisant le défilement du contenu avec celui de la page. Cette combinaison entre <b>scrolly</b> et carousel crée une présentation dynamique, idéale pour des portfolios ou des présentations interactives.
                        </p>
                    </div>
                    <div class="projetContentImg">
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/timtools/carousel_Timtools1.gif" alt="" />
                            <p>GIF de la composante Carousel</p>
                        </div>
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/timtools/carousel_Timtools2.gif" alt="" />
                            <p>GIF de la composante Carousel</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="inspiration">
                    <div class="projetContentTxt">
                        <h3>Header</h3>
                        <p>
                            Le composant <b>Header</b> responsive s'adapte de manière fluide au défilement de la page. En utilisant la technique de détection de défilement, le header peut changer d'apparence, par exemple en réduisant sa taille, en modifiant sa transparence, ou en ajoutant des effets visuels. Ce comportement permet de maximiser l’espace visible tout en garantissant une navigation accessible à tout moment. Grâce à ce header réactif, l’expérience utilisateur est plus fluide et dynamique, notamment sur les appareils mobiles.
                        </p>
                    </div>
                    <div class="projetContentImg">
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/timtools/header_Timtools.gif" alt="" />
                            <p>GIF de l'apparition et de la disparition du header.</p>
                        </div>
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/timtools/headerCode_timtools.png" alt="" />
                            <p>Image du code de la composante Header.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="inspiration">
                    <div class="projetContentTxt">
                        <h3>Scrolly</h3>
                        <p>
                            Le composant <b>Scrolly</b> permet de générer des effets interactifs en fonction du défilement de la page. En synchronisant le mouvement de l’utilisateur avec des animations ou des changements de contenu, <b>Scrolly</b> renforce l’engagement visuel. Par exemple, certains éléments peuvent apparaître, se transformer ou disparaître au fur et à mesure du scroll, créant ainsi une expérience immersive et dynamique. Ce composant est particulièrement utile pour les pages narratives, les portfolios créatifs, ou les présentations interactives.
                        </p>
                    </div>
                    <div class="projetContentImg">
                        <div data-scrolly="fromLeft" class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/timtools/scrolly_Timtools.gif" alt="" />
                            <p>GIF de la composante Scrolly</p>
                        </div>
                        <div data-scrolly="fromLeft" class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/timtools/scrollyCode_timtools.png" alt="" />
                            <p>Image du code de la composante Scrolly.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<?php get_footer(); ?>
