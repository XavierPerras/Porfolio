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
                    <h1>TimTools</h1>
                    <h2>Web | Projet Étudiant</h2>
                    <p>Ma boîte à outils est une plateforme en ligne que j'ai créée pour ma productivité.</p>
                </div>
                <div class="herotxt">
                    <p>Réalisé par: moi</p>
                    <p>Réalisé en 2023</p>
                    <p>Tous les composants sont faits par moi!</p>
                </div>
                <div class="projetLog">
                    <h4>Logiciels que j’ai utilisé:</h4>
                    <div class="projetlogIcon">
                        <div class="item">
                            <svg class="icon icon--lg">
                                <use xlink:href="#icon-vsCode"></use>
                            </svg>
                            <p>VS code</p>
                        </div>

                    </div>
                </div>
                <a class="bouton" target="_blank" href="https://xperras.dectim.ca/toolbox" href='target'>Voir le site!</a>
            </div>
        </div>
    </div>
</section>
<section class="wrapper">
    <div class="swiper projetContent" data-gap="120" data-loop="loop" data-component="Carousel">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="inspiration">
                    <div class="projetContentTxt">
                        <h3>Le context!</h3>
                        <p>
                            Dans le cadre de ma formation scolaire, j'ai <strong>développé</strong> un site web qui met en lumière les différentes <strong>compétences</strong> acquises au cours de mes études. Ce projet comprend des exemples concrets, tels que l'effet <strong>"scrolly"</strong> pour des <strong>transitions fluides</strong>, un en-tête fixe assurant une <strong>navigation intuitive</strong>, ainsi que l'intégration de <strong>sections dynamiques</strong>. Ce site illustre mes aptitudes en <strong>HTML</strong>, <strong>CSS</strong> et <strong>JavaScript</strong>, tout en mettant en avant des éléments comme des <strong>animations interactives</strong> et des <strong>mises en page réactives</strong>. J'ai conçu l'ensemble pour qu'il soit à la fois <strong>esthétique</strong> et <strong>fonctionnel</strong>, facilitant ainsi une exploration enrichissante du <strong>contenu</strong>.
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
                            Le composant <b>Carousel</b> permet d’afficher plusieurs éléments visuels dans un espace limité, en créant un effet de défilement horizontal.
                            En utilisant la technique du <b>scrolly</b>, on peut enrichir l’expérience utilisateur en synchronisant le défilement du contenu avec le mouvement de la page.
                            Lorsqu’un utilisateur fait défiler vers le bas, les éléments du carousel défilent progressivement, créant une transition fluide et immersive.
                            Cette combinaison entre <b>scrolly</b> et carousel offre une présentation dynamique, idéale pour des portfolios ou des présentations interactives.
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
                            Le composant <b>Header</b> responsive réagit de manière fluide lorsque l'utilisateur fait défiler la page.
                            En utilisant la technique de détection de défilement, le header peut changer d'apparence, par exemple en réduisant sa taille,
                            en modifiant sa transparence, ou en ajoutant des effets visuels. Ce comportement permet de maximiser l'espace visible tout en
                            assurant une navigation accessible à tout moment. Grâce à ce header réactif, l'expérience utilisateur devient plus fluide et dynamique,
                            surtout sur les appareils mobiles.
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
                            Le composant <b>Scrolly</b> permet de créer des effets interactifs en fonction du défilement de la page.
                            En synchronisant le mouvement de l’utilisateur avec des animations ou des changements de contenu, <b>Scrolly</b> améliore
                            l’engagement visuel. Par exemple, certains éléments peuvent apparaître, se transformer ou disparaître au fur et à mesure du scroll,
                            créant ainsi une expérience immersive et dynamique. Ce composant est particulièrement utile pour les pages narratives,
                            les portfolios créatifs ou les présentations interactives.
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

        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>




<?php get_footer(); ?>