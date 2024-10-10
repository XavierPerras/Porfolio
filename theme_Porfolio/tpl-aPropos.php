<?php
/* Template Name: A propos */
?> 
<?php get_header(); ?>



<section class="hero">
        <div class="wrapper">
            <img data-scrolly="fromLeft" src="<?php bloginfo('template_url'); ?>/dist/assets/images/photoPro.png" alt="photo profesionnel de moi" />
            <div data-scrolly="fromRight" class="heroTxt">
                <h1>Xavier Perras</h1>
                <h2>
                    Créateur 3D/
                    <br />
                    DevWeb junior
                </h2>
                <p>
                    Je suis en technique d’intégration multimédia au Cégep Édouard-Montpetit. Je termine ma technique en mai
                    2025. J’aime la 3D et l’intégration web.
                </p>
            </div>
        </div>
    </section>
    <section class="CLQ">
    <div class="wrapper">
        <div class="accordion">
            <div data-scrolly="fromLeft" class="accordion-item competence">
                <input type="checkbox" id="item1" class="accordion-toggle" />
                <label for="item1" class="accordion-title"><h3>Mes Compétences</h3></label>
                <div class="accordion-content">
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-integration"></use>
                        </svg>
                        <h4>Intégration web,</h4>
                    </div>
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-animation"></use>
                        </svg>
                        <h4>Animation 3D,</h4>
                    </div>
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-animation"></use>
                        </svg>
                        <h4>Animation 2D,</h4>
                    </div>
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-web"></use>
                        </svg>
                        <h4>Développement web,</h4>
                    </div>
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-modelisation"></use>
                        </svg>
                        <h4>Modélisation 3D,</h4>
                    </div>
                </div>
            </div>
            <div data-scrolly="fromLittle" class="accordion-item logiciel">
                <input type="checkbox" id="item2" class="accordion-toggle" />
                <label for="item2" class="accordion-title"><h3>Logiciels que j’utilise!</h3></label>
                <div class="accordion-content">
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-blender"></use>
                        </svg>
                        <h4>Blender</h4>
                    </div>
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-vsCode"></use>
                        </svg>
                        <h4>Vs Code</h4>
                    </div>
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-webstorm"></use>
                        </svg>
                        <h4>Webstorm</h4>
                    </div>
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-davinci"></use>
                        </svg>
                        <h4>DaVinci Resolve</h4>
                    </div>
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-inkscape"></use>
                        </svg>
                        <h4>Inkscape</h4>
                    </div>
                </div>
            </div>
            <div data-scrolly="fromRight" class="accordion-item qualite">
                <input type="checkbox" id="item3" class="accordion-toggle" />
                <label for="item3" class="accordion-title"><h3>Mes Qualitées</h3></label>
                <div class="accordion-content">
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-methodique"></use>
                        </svg>
                        <h4>Méthodique</h4>
                    </div>
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-discipline"></use>
                        </svg>
                        <h4>Discipliné</h4>
                    </div>
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-solution"></use>
                        </svg>
                        <h4>Trouveur de solutions</h4>
                    </div>
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-curieux"></use>
                        </svg>
                        <h4>Curieux</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="jaime">
        <div class="wrapper">
            <h2 data-scrolly='fromLeft'>Mes loisirs</h2>
        </div>
        <div class="cards">
            <div class="card">
                <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/nfl.jpg" alt="">
                <div class="txt">
                    <p data-scrolly='flipFromBottom'>Je joue au football dans la ligue junior QJFL et j'aime regarder les matchs NFL, NCAA, et CFL. </p>
                </div>
            </div>
            <div class="card"> <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/gym.jpg" alt="">
                <div class="txt">
                    <p data-scrolly='flipFromBottom'>J'aime m'entraîner à la salle de sport. Cela me permet de rester en forme et de me dépasser physiquement.</p>
                </div>
            </div>
            <div class="card"> <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/gaming.jpg" alt="">
                <div class="txt">
                    <p data-scrolly='flipFromBottom'>Je suis un grand fan de RPG et de FPS. Les RPG, comme Monster Hunter: World, me captivent avec leurs récits riches, leurs systèmes de progression et la personnalisation des personnages. D'un autre côté, les FPS comme Ghost Recon me passionnent pour leur action rapide, la stratégie en équipe et l'adrénaline des combats en temps réel.</p>
                </div>
            </div>
            <div class="card"> <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/anime.jpg" alt="">
                <div class="txt">
                    <p data-scrolly='flipFromBottom'>J'aime beaucoup les animes, les mangas et les manhwas. Ils me plongent dans des histoires captivantes avec des dessins vraiment intéressants.</p>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>