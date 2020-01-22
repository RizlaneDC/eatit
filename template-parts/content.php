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

    <div class="entry-content">  
      <?php the_content() ?>      
    </div>

  </div><!-- .container -->

</article>