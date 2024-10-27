<?php
/* Template Name: Contact */
?> 
<?php get_header(); ?>

<section class="contact">
    <div class="wrapper">
        <div data-scrolly="fromLeft" class="txtcont">
            <h1>Contactez-moi !</h1>
            <a href="mailto:xavier.perras@outlook.com">
                <svg class="icon icon--lg">
                    <use xlink:href="#icon-mailto"></use>
                </svg>
                <h3>xavier.perras@outlook.com</h3>
            </a>
            <a href="tel:438-526-9382">
                <svg class="icon icon--lg">
                    <use xlink:href="#icon-phone"></use>
                </svg>
                <h3>438-526-9382</h3>
            </a>
            <a href="./assets/documents/monCv.txt" download>
                <svg class="icon icon--lg">
                    <use xlink:href="#icon-cv"></use>
                </svg>
                <h3>Curriculum Vitae</h3>
            </a>
            <div class="media">
                <a target="_blank" href="https://github.com/XavierPerras">
                    <svg class="icon icon--lg">
                        <use xlink:href="#icon-githubLogo"></use>
                    </svg>
                </a>
                <a target="_blank" href="https://sketchfab.com/WonderedGnat082">
                    <svg class="icon icon--lg">
                        <use xlink:href="#icon-sketchfabLogo"></use>
                    </svg>
                </a>
                <a target="_blank" href="https://www.instagram.com/xavier_perras/">
                    <svg class="icon icon--lg">
                        <use xlink:href="#icon-instaLogo"></use>
                    </svg>
                </a>
                <a target="_blank" href="https://www.linkedin.com/in/xavier-perras-3746b932a/">
                    <svg class="icon icon--lg">
                        <use xlink:href="#icon-linkinLogo"></use>
                    </svg>
                </a>
                <a target="_blank" href="https://www.youtube.com/@xavierperras">
                    <svg class="icon icon--lg">
                        <use xlink:href="#icon-ytLogo"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div data-scrolly="fromRight" class="form">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
