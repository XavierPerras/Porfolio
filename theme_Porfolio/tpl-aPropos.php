<?php
/* Template Name: À propos */
?> 
<?php get_header(); ?>


<section class="hero">
    <div class="wrapper">
        <img data-scrolly="fromLeft" src="<?php bloginfo('template_url'); ?>/dist/assets/images/photoPro.png" alt="Photo professionnelle de Xavier Perras" />
        <div data-scrolly="fromRight" class="heroTxt">
            <h1>Xavier Perras</h1>
            <h2>
                Créateur 3D /
                <br />
                Développeur web junior
            </h2>
            <p>
                Je suis en technique d’intégration multimédia au Cégep Édouard-Montpetit et je termine ma technique en mai 2025. J’aime la 3D et l’intégration web.
            </p>
            <a class="ttsproj bouton" href="https://xperras.dectim.ca/projets/">Mes projets!</a>
        </div>
    </div>
</section>

<section class="videoPresentation">
    <div class="wrapper">
        <h2>Ma vidéo de présentation!</h2>
        <div class="video">
            <iframe class="video" src="https://www.youtube.com/embed/oyBW3fOkdtY?si=rsdVGBINAeaDs--z" title="YouTube video player" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                        <h4>Intégration web</h4>
                    </div>
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-animation"></use>
                        </svg>
                        <h4>Animation 3D</h4>
                    </div>
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-animation"></use>
                        </svg>
                        <h4>Animation 2D</h4>
                    </div>
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-web"></use>
                        </svg>
                        <h4>Développement web</h4>
                    </div>
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-modelisation"></use>
                        </svg>
                        <h4>Modélisation 3D</h4>
                    </div>
                </div>
            </div>
            <div data-scrolly="fromLittle" class="accordion-item logiciel">
                <input type="checkbox" id="item2" class="accordion-toggle" />
                <label for="item2" class="accordion-title"><h3>Mes Logiciels</h3></label>
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
                        <h4>VS Code</h4>
                    </div>
                    <div class="item">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-webstorm"></use>
                        </svg>
                        <h4>WebStorm</h4>
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
                <label for="item3" class="accordion-title"><h3>Mes Qualités</h3></label>
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
            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/nfl.jpg" alt="Jouer au football" />
            <div class="txt">
                <p data-scrolly='flipFromBottom'>Je joue au football dans la ligue junior QJFL et j'aime regarder les matchs de la NFL, NCAA et CFL.</p>
            </div>
        </div>
        <div class="card">
            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/gym.jpg" alt="Salle de sport" />
            <div class="txt">
                <p data-scrolly='flipFromBottom'>J'aime m'entraîner à la salle de sport, cela me permet de rester en forme et de me dépasser physiquement.</p>
            </div>
        </div>
        <div class="card">
            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/gaming.jpg" alt="Gaming" />
            <div class="txt">
                <p data-scrolly='flipFromBottom'>Je suis un grand fan de RPG pour leurs récits, la personnalisation et le travail d'équipe, ainsi que de FPS pour l’action rapide et stratégique.</p>
            </div>
        </div>
        <div class="card">
            <img src="<?php bloginfo('template_url'); ?>/dist/assets/images/anime.jpg" alt="Anime et mangas" />
            <div class="txt">
                <p data-scrolly='flipFromBottom'>J'aime beaucoup les animes, les mangas et les manhwas. Ils me plongent dans des histoires captivantes avec des dessins vraiment intéressants.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
