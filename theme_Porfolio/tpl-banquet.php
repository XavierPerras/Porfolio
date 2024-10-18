<?php
/* Template Name: Banquet */
?>
<?php get_header(); ?>

<section class="projet">
    <div class="wrapper">
        <div class="projetHero">
            <iframe width="871"
                height="490"
                src="https://www.youtube.com/embed/PQ7JkYxQd9Q?si=SiDl5FlHqJ-2JYIk"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            <div data-scrolly="fromRight" class="projetHerotxt">
                <div class="heroHead">
                    <h1>Le Banquet</h1>
                    <h2>Animation Multimédia | Projet Étudiant</h2>
                    <p>Animation d'un banquet a l'époque médiéval</p>
                </div>
                <div class="herotxt">
                    <p>Réalisé par: Moi et Félix-Antoine Perras(Acteur)</p>
                    <p>Réalisé en 2022</p>
                    <p>effet sonore: Libre de droits, mais pas fait par moi ! </p>
                </div>
                <div class="projetLog">
                    <h4>Logiciels que j’ai utilisé:</h4>
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
                            <p>Davinci</p>
                        </div>
                        <div class="item">
                            <svg class="icon icon--lg">
                                <use xlink:href="#icon-adobe"></use>
                            </svg>
                            <p>La suite Adobe</p>
                        </div>
                    </div>
                </div>
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
                        <h3>Inspiration!</h3>
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
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/leBanquet/chateauIdea.jpg" alt="" />
                            <p>Image De chateau</p>
                        </div>
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/leBanquet/croquis.jpeg" alt="" />
                            <p>Croquis à main levée</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="inspiration">
                    <div class="projetContentTxt">
                        <h3>Création!</h3>
                        <p>
                            Pour ce projet Blender, j’ai utilisé un écran vert avec l’aide de mon frère, qui m’a assisté pour le tournage. Nous avons filmé différentes séquences sur fond vert, que j’ai ensuite intégrées dans Blender pour créer un environnement 3D immersif. L’écran vert m’a permis de combiner des éléments vidéo réels avec des scènes numériques, offrant un rendu réaliste. Grâce à la collaboration avec mon frère, le processus a été fluide et créatif.
                        </p>
                    </div>
                    <div class="projetContentImg">
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/leBanquet/HighArm100.png" alt="" />
                            <p>Image de mon fere lors du tournage.</p>
                        </div>
                        <div class="projetImg rotate">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/leBanquet/blendermodel.png" alt="" />
                            <p>Image du model dans Blender.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="inspiration">
                    <div class="projetContentTxt">
                        <h3>Animation!</h3>
                        <p>
                            Pour <b>mon projet Blender</b>, j'ai utilisé la technique des <b>keyframes (images clés)</b> pour créer l'animation.
                            Avec l'aide de mon frère, nous avons filmé des séquences sur fond vert, que j'ai ensuite intégrées en 3D.
                            J'ai défini des keyframes pour synchroniser les mouvements de la vidéo avec les éléments numériques, ajoutant des effets visuels
                            comme des particules pour simuler les interactions entre la vidéo et l'environnement 3D. Grâce à cette technique, l'animation
                            est fluide et réaliste, fusionnant parfaitement le réel et le virtuel.
                        </p>
                    </div>
                    <div class="projetContentImg">
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/leBanquet/BlenderRendu1.png" alt="" />
                            <p>Image du model avec l'éclairage.</p>
                        </div>
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/leBanquet/blenderrendu2.png" alt="" />
                            <p>Image du model en cours d'ajout des vidéos.</p>
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
        <h3>Le modèle SketchFab.</h3>

        <div class="sketchfab-embed-wrapper"> <iframe title="Le Banquet" frameborder="0" width="1080"
                height="440" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/b4918b2a9aaf4f33a6caa3ef1688ebdf/embed?ui_theme=dark"> </iframe>
            <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> <a href="https://sketchfab.com/3d-models/le-banquet-b4918b2a9aaf4f33a6caa3ef1688ebdf?utm_medium=embed&utm_campaign=share-popup&utm_content=b4918b2a9aaf4f33a6caa3ef1688ebdf" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> Le Banquet </a> by <a href="https://sketchfab.com/WonderedGnat082?utm_medium=embed&utm_campaign=share-popup&utm_content=b4918b2a9aaf4f33a6caa3ef1688ebdf" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> Xavier Perras </a> on <a href="https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=b4918b2a9aaf4f33a6caa3ef1688ebdf" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;">Sketchfab</a></p>
        </div>
    </div>
</section>

<?php get_footer(); ?>