<?php
/* Template Name: Fusée */
?>
<?php get_header(); ?>

<section class="projet">
    <div class="wrapper">
        <div class="projetHero">
            <div class="projetVideo">
                <iframe
                    data-scrolly="fromLeft"
                    width="100%"
                    height="100%"
                    src="https://www.youtube.com/embed/6IXWMH-EWU0"
                    title="La fusée | Animation Blender"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen></iframe>
            </div>

            <div data-scrolly="fromRight" class="projetHerotxt">
                <div class="heroHead">
                  <div> <h1>La fusée</h1><p>Réalisé en 2021</p></div> 
                    <h2>Animation 3D | Projet Étudiant</h2>
                    <p>Décollage d’une fusée dans l’espace. Elle va entrer en hypervitesse.</p>
                </div>
                <div class="herotxt">
                    <p>Réalisé par : Moi seulement!</p>
                    
                    <p>Effet sonore : Libre de droits, mais pas fait par moi !</p>
                </div>
                <div class="projetLog">
                    <h4>Logiciels que j’ai utilisés :</h4>
                    <div class="projetlogIcon">
                        <div class="item">
                            <svg class="icon icon--lg">
                                <use xlink:href="#icon-blender"></use>
                            </svg>
                            <p>Blender</p>
                        </div>
                        <div class="item">
                            <svg class="icon icon--lg">
                                <use xlink:href="#icon-davinci"></use>
                            </svg>
                            <p>DaVinci</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrapper">
    <div class="swiper projetContent" data-gap="120" data-loop="loop" data-autoplay="4000" data-component="Carousel">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="inspiration">
                    <div class="projetContentTxt">
                        <h3>Inspiration !</h3>
                        <p>
                            Inspirée du SR-71 Blackbird, la fusée spatiale présente un corps fuselé et aérodynamique
                            pour réduire la traînée, avec des ailerons inclinés en V pour plus de stabilité. Son
                            revêtement sombre et thermorésistant rappelle les matériaux furtifs de l'avion. Les moteurs
                            intégrés, dissimulés pour minimiser la résistance, s'inspirent des réacteurs du SR-71,
                            optimisés pour le vide spatial, offrant ainsi un design rapide et agressif.
                        </p>
                    </div>
                    <div class="projetContentImg">
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/laFusee/blackBird.jpg" alt="" />
                            <p>Image du SR-71 Blackbird</p>
                        </div>
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/laFusee/croquis.jpg" alt="" />
                            <p>Croquis à main levée</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="inspiration">
                    <div class="projetContentTxt">
                        <h3>Modélisation !</h3>
                        <p>
                            Dans Blender, j'ai conçu le modèle 3D de ma fusée en utilisant des modificateurs de miroir
                            pour assurer la symétrie parfaite des ailerons et du corps. J'ai commencé par modéliser le
                            corps principal avec un cylindre allongé, auquel j'ai ajouté un cône pour la pointe. Pour
                            les ailerons triangulaires, je les ai créés une seule fois, puis je les ai dupliqués et
                            disposés symétriquement grâce à l'outil de miroir. J'ai ajouté des détails comme des
                            panneaux, des vis et des textures métalliques pour obtenir un effet à la fois réaliste et
                            stylisé, tout en restant fidèle à un design fonctionnel et futuriste.
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
                        <h3>Animation !</h3>
                        <p>
                            Pour
                            <b>l'animation</b>
                            , Blender utilise la technique des
                            <b>keyframes (images clés)</b>
                            pour créer les mouvements de la fusée. L'animation du décollage commence par définir la
                            position initiale de la fusée au sol. Ensuite, des keyframes sont placées à des intervalles
                            pour faire monter la fusée progressivement, tout en simulant l'activation des moteurs avec
                            des effets de particules pour le feu et la fumée. Grâce à ces keyframes, on obtient une
                            animation fluide et réaliste, illustrant parfaitement la puissance et la dynamique du
                            décollage.
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
        </div>

        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="sketchfab">
    <div class="wrapper">
        <h3>Le modèle SketchFab</h3>

        <div class="sketchfab-embed-wrapper">
            <iframe
                title="Décollage de fusée"
                frameborder="0"
                width="100%"
                height="100%"
                allowfullscreen
                mozallowfullscreen="true"
                webkitallowfullscreen="true"
                allow="autoplay; fullscreen; xr-spatial-tracking"
                xr-spatial-tracking
                execution-while-out-of-viewport
                execution-while-not-rendered
                web-share
                src="https://sketchfab.com/models/c6a2b4718f1449cdb7fc393371c37a5d/embed?autostart=1&preload=1&ui_hint=2"></iframe>
            <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4a4a4a">
                <a
                    href="https://sketchfab.com/3d-models/decollage-de-fusee-c6a2b4718f1449cdb7fc393371c37a5d?utm_medium=embed&utm_campaign=share-popup&utm_content=c6a2b4718f1449cdb7fc393371c37a5d"
                    target="_blank"
                    rel="nofollow"
                    style="font-weight: bold; color: #1caad9">
                    Décollage de fusée
                </a>
                par
                <a
                    href="https://sketchfab.com/WonderedGnat082?utm_medium=embed&utm_campaign=share-popup&utm_content=c6a2b4718f1449cdb7fc393371c37a5d"
                    target="_blank"
                    rel="nofollow"
                    style="font-weight: bold; color: #1caad9">
                    Xavier Perras
                </a>
                sur
                <a
                    href="https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=c6a2b4718f1449cdb7fc393371c37a5d"
                    target="_blank"
                    rel="nofollow"
                    style="font-weight: bold; color: #1caad9">
                    Sketchfab
                </a>
            </p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
