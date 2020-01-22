<?php
/**
 * Template part for displaying posts
 *
 *
 * @package WordPress
 * @subpackage Startheme
 * @since 1.0.0
 */

?>

<article <?php post_class(); ?>>

  <h1 class="page-title entry-title"><?= get_the_title() ?></h1>

  <div class="container py-5">

    <div class="row">

      <div class="col-lg-8">
        <div class="entry-content">  
          <?php the_content() ?>      
        </div>
      </div>

      <div class="col mt-4 mt-lg-0">
        <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('thumb-large', array('class'=>'img-fluid')); ?>
        <?php endif; ?>
      </div>

    </div><!-- .row -->

  </div><!-- .container -->

</article>