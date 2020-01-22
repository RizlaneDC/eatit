<?php

/**
 * The main template file
 *
 * ...
 *
 * @package WordPress
 * @subpackage Startheme
 * @since 1.0.0
 *
 */


$specs = get_terms(array(
'taxonomy' => 'sepecialite',
'hide_empty' => false
));

get_header();
?>

<header class="photo-header">
  <div class="container">
    <h1><?php bloginfo('description') ?></h1>
  </div>
</header>




<main>
        <section class="restaurants container" id="resto">
            <h2 class="text-center">De quoi avez-vous envie?<br>A vos clics! Commandez, mangez</h2>

            <div class="carousel-restos owl-carousel">

                <?php foreach ($specs as $spec) : ?>
                  <?php $img = get_field('image', $spec) ?>
                  <div class="item">
                  <img src="<?= $img['url'] ?>" alt="">
                    <a href="<?= esc_url( get_term_link( $spec ) ) ?>" class="btn btn-primary"><?= $spec->name ?></a>
                  </div>
                <?php endforeach; ?>

            </div>
        </section>

        <section class="ecologie" id="ecolo">
            <div class="container">
                <article class="filigrane">
                    <h2>Soucieux de notre empreinte quotidienne</h2>
                    <p>Nous avons fait le choix de vous livrer à vélo et uniquement à vélo pour limiter l'impact environnemental
                    </p>
                </article>

                <a href="https://leshorizons.net/2018/11/19/le-secteur-de-la-livraison-peut-il-etre-ecolo/" target="_blank" class="btn md-m-center btn-primary">A la une</a>

            </div>
        </section>

        <section class="commandez container">
            <h2>Désormais commandez en ligne</h2>
            <h3>Simple, rapide et sécurisé</h3>
            <img class="responsive" src="<?= get_template_directory_uri(); ?>/src/images/devices.png" alt="responsive">
            <p>En quelques clics vous êtes à table. Obtenez un <a href="#">code promo</a></p>
        </section>

        <div class="fourchette"></div>



        <section class="reseaux" id="rs">

            <div class="container">

                <h2>Ce que vous pensez de nous <br>sur les réseaux sociaux...</h2>

                <div class="reseaux-inner">

                    <div class="rs">
                        <p>Nous n'avons plus de secret pour vous</p>
                        <p><span>Suivez-nous</span></p>
                        <a href="#"><img src="<?= get_template_directory_uri(); ?>/src/images/instagram-5.png" alt="instagram"></a>
                        <a href="#"><img src="<?= get_template_directory_uri(); ?>/src/images/facebook-5.png"></a>
                    </div>

                    <div class="rs">
                        <a href="https://www.instagram.com/foodugout/" target="_blank"><img class="ecolo" src="<?= get_template_directory_uri(); ?>/src/images/femme-echolo-2.png" alt="témoignage instagram"></a>
                        <a href="https://www.instagram.com/foodugout/" target="_blank"><img classe="choix" src="<?= get_template_directory_uri(); ?>/src/images/femmes-choix-1.png" alt="témoignage instagram ecologie"></a>
                        <a href="https://www.instagram.com/foodugout/" target="_blank"><img class="bon" src="<?= get_template_directory_uri(); ?>/src/images/Brown, Pink and Green Abstract Shapes Wellness Instagram Story Set-1.png"></a>
                    </div>

                </div>

            </div>

        </section>

</main>
<?php get_footer() ?>