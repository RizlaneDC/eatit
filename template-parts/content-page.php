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

  <div class="container py-5">

    <h1 class="page-title entry-title"><?= get_the_title() ?></h1>

    <?php if(is_active_sidebar('sidebar-right')) : ?>

    <div class="row">

      <div class="col-md-8">
        <div class="entry-content">  
          <?php the_content() ?>      
        </div>
      </div>

      <div class="col">
        <?php dynamic_sidebar('sidebar-right') ?>
      </div>

    </div><!-- .row -->

    <?php else : ?>

    <div class="entry-content">  
      <?php the_content() ?>      
    </div>

    <?php endif; ?>

    

  </div><!-- .container -->

</article>