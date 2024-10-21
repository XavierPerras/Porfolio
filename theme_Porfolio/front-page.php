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
                <a class="ttsproj bouton " href="https://xperras.dectim.ca/projets/">Mes projets!</a>
            </div>
        </div>
    </section>
    <section class="projets">
        <div class="wrapper">
            <h2 data-scrolly='fromLeft'>Quelques Projets!</h2>
            <div class="projetsContent">
                <img data-scrolly='fromLeft' src="<?php bloginfo('template_url'); ?>/dist/assets/images/laFusee/hero.jpg" alt="photo profesionnel de moi" />
                <div data-scrolly='fromRight' class="projetsTxt">
                    <h3>La fusée</h3>
                    <h2>Blender, 3D, montage sonore</h2>
                    <p>Décollange d’une fusée dans l’espace. Elle va entrer dans l’hyper vitesse</p>
                    <a class="bouton" href="https://xperras.dectim.ca/la-fusee/">Voir le projet</a>
                </div>
            </div>
            <div class="projetsContent">
                <img data-scrolly='fromLeft' src="<?php bloginfo('template_url'); ?>/dist/assets/images/imgTimTool.png" alt="photo profesionnel de moi" />
                <div data-scrolly='fromRight' class="projetsTxt">
                    <h3>TimTools</h3>
                    <h2>HTML, SCSS et JavaScript</h2>
                    <p>Les outils de programmation web, le réusinage et le partage de code sont essentiels pour réutiliser des ressources, économiser du temps, collaborer efficacement et améliorer la qualité des sites et applications interactifs.</p>
                    <a class="bouton" href="https://xperras.dectim.ca/timtools">Voir le projet</a>
                </div>
            </div> <a class="bouton ttsproj" href="https://xperras.dectim.ca/projets/">Voir les projets</a>

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
   

    <?php get_footer(); ?>
