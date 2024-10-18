<?php
/* Template Name: timtools */
?> 
<?php get_header(); ?>

        <section class="projet">
            <div class="wrapper">
                <div class="projetHero">
                    <iframe
                        data-scrolly="fromLeft"
                        width="871"
                        height="490"
                        src="https://www.youtube.com/embed/6IXWMH-EWU0"
                        title="La fusée | Animation Blender"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen
                    ></iframe>

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
                        <a class="bouton" target="_blank" href="https://xperras.dectim.ca/toolbox" href='target'>Voir le site!</a> </div>
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
                        <h3>Le context de création!</h3>
                        <p>
                            Dans un cadre scolaire, j'ai créé un site web qui présente les différentes composantes apprises durant mon cours. Il inclut des exemples concrets comme l’effet "scrolly" pour des transitions fluides, un header fixe pour une navigation intuitive, et l’intégration de sections dynamiques. Ce site illustre mes compétences en HTML, CSS et JavaScript, en mettant en avant des éléments tels que les animations interactives et les mises en page adaptatives. J'ai conçu le tout pour être à la fois esthétique et fonctionnel, facilitant ainsi l'exploration du contenu.
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
                          Dans Blender, j'ai conçu le modèle 3D de ma fusée en utilisant des modificateurs de miroir pour assurer la symétrie parfaite des ailerons et du corps. J'ai commencé par modéliser le corps principal avec un cylindre allongé, auquel j'ai ajouté un cône pour la pointe. Pour les ailerons triangulaires, je les ai créés une seule fois, puis je les ai dupliqués et disposés symétriquement grâce à l'outil de miroir. J'ai ajouté des détails comme des panneaux, des vis et des textures métalliques pour obtenir un effet à la fois réaliste et stylisé, tout en restant fidèle à un design fonctionnel et futuriste.
                        </p>
                    </div>
                    <div class="projetContentImg">
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/laFusee/wireframe.jpg" alt="" />
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
                            Pour l'animation, Blender utilise la technique des <b>keyframes (images clés)</b> pour créer les mouvements de la fusée. L'animation du décollage commence par définir la position initiale de la fusée au sol. Ensuite, des keyframes sont placées à des intervalles pour faire monter la fusée progressivement, tout en simulant l'activation des moteurs avec des effets de particules pour le feu et la fumée. Grâce à ces keyframes, on obtient une animation fluide et réaliste, illustrant parfaitement la puissance et la dynamique du décollage.
                        </p>
                    </div>
                    <div class="projetContentImg">
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/laFusee/wireframe.jpg" alt="" />
                            <p>Image du wireframe du décor et de la fusée.</p>
                        </div>
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/laFusee/viewportAnime.jpg" alt="" />
                            <p>Image du viewport d'animation.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="inspiration">
                    <div class="projetContentTxt">
                        <h3>Scrolly</h3>
                        <p>  
                            La technique Scrolly est une façon innovante et dynamique de concevoir des sites Web modernes et engageants. Cette technique implique l'utilisation d'un défilement de page ou d'un défilement parallaxe pour créer une expérience de navigation immersive et interactive pour les visiteurs du site.
                        </p>
                    </div>
                    <div class="projetContentImg">
                        <div data-scrolly="fromLeft" class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/laFusee/wireframe.jpg" alt="" />
                            <p>GIF de la composante Scrolly</p>
                        </div>
                        <div data-scrolly="fromLeft" class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/laFusee/wireframe.jpg" alt="" />
                            <p>GIF de la composante Scrolly</p>
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