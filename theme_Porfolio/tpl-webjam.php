<?php
/* Template Name: webjam */
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
                            <h1>Wenjam 2024</h1>
                            <h2>Web | Projet d'équipe | Projet Étudiant</h2>
                            <p>Création d'un site web en moins de 36 heures.</p>
                        </div>
                        <div class="herotxt">
                            <p>Réalisé par: Antoine Breton, Alexandre Frégeau, Simon Bigra, moi</p>
                            <p>Réalisé en 2024</p>
                            
                        </div>
                        <div class="projetLog">
                            <h4>Logiciels que j’ai utilisé:</h4>
                            <div class="projetlogIcon">
                                <div class="item">
                                    <svg class="icon icon--lg">
                                        <use xlink:href="#icon-vsCode"></use>
                                    </svg>
                                    <p>Vs code</p>
                                </div>
                                <div class="item">
                                    <svg class="icon icon--lg">
                                        <use xlink:href="#icon-figma"></use>
                                    </svg>
                                    <p>Figma</p>
                                </div>
                            </div>
                        <a class="bouton" target="_blank" href="https://abreton.dectim.ca/webjam/" href='target'>Voir le site!</a></div>
                    </div>
                    </div> </div>
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
                        <h3>Leadership en Action!</h3>
                        <p>
                        En tant que chef d'équipe lors du WebJam, j'ai dirigé avec confiance et organisation, assurant la cohésion et la motivation de chaque membre. J'ai su orienter les forces individuelles vers un objectif commun, tout en maintenant une vision claire et stratégique. Grâce à mon leadership, nous avons atteint nos objectifs efficacement, malgré les contraintes.
                        </p>
                    </div>
                    <div class="projetContentImg">
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/laFusee/blackBird.jpg" alt="" />
                            <p>planning des olympiades</p>
                        </div>
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/laFusee/croquis.jpg" alt="" />
                            <p>image du trello</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="inspiration">
                    <div class="projetContentTxt">
                        <h3>Polyvalence!</h3>
                        <p>
                        Ma polyvalence a été un atout majeur lors de l'olympiade.
                         J'ai navigué entre les rôles de développement, design et gestion de projet avec agilité,
                          assurant la continuité et la fluidité du travail.
                        </p>
                    </div>
                    <div class="projetContentImg">
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/laFusee/wireframe.jpg" alt="" />
                            <p>image du figma</p>
                        </div>
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/laFusee/viewportAnime.jpg" alt="" />
                            <p>Image du code</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="inspiration">
                    <div class="projetContentTxt">
                        <h3>Travail d’Équipe sous Pression et Gestion de Crises!</h3>
                        <p>Pendant le WebJam, nous avons fait face à des conflits complexes 
                            sur GitHub, créant des tensions au sein de l’équipe. En tant que leader, j’ai géré ces crises avec calme, en résolvant rapidement les problèmes de fusion et en maintenant une communication claire. Malgré le manque de sommeil et le stress intense,
                             j'ai su motiver l'équipe à rester concentrée et à livrer un projet de qualité dans les délais impartis.
                        </p>
                    </div>
                    <div class="projetContentImg">
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/laFusee/wireframe.jpg" alt="" />
                            <p>image d'un push a la  branche main</p>
                        </div>
                        <div class="projetImg">
                            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/laFusee/viewportAnime.jpg" alt="" />
                            <p>Image de l'équipe</p>
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