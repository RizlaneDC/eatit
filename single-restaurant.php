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
get_header();
?>
<main class="container">

<div class="column justify-content md-center">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


  <?php $types = get_the_terms(get_the_ID(), 'type_de_resto'); ?>
    <?php if ($types) : ?>
      <div class="type-resto py-4"><ul>
        <?php foreach($types as $type) : ?>
          <?php $link = get_term_link($type); ?>
          <li>
            <a href="<?= $link; ?>"><?= $type->name; ?></a>
          </li>
        <?php endforeach; ?>
      </ul></div>
    <?php endif; ?>

    <h1 class="nom_resto"><?php the_title(); ?></h1>

    <?php the_post_thumbnail("medium"); ?>
    <?php the_content(); ?>



    <div class="child row justify-content ml-auto">
    <?php if( have_rows('menus') ): ?>
    
      <ul class="slides">
      <?php while( have_rows('menus') ): the_row(); 
        // vars
        //les sous titres Restau (menus)
        $titre = get_sub_field('titre');
        $image = get_sub_field('image');
        $description = get_sub_field('description');
        $prix = get_sub_field('prix');
        ?>

        <img class="photo-resto" src="<?php echo $image['sizes']["thumbnail"]; ?>" alt="<?php echo $image['alt'] ?>" />   
        <li class="slide">
            <?php echo $titre; ?>
            <?php echo $description; ?>
            <?php echo $prix; ?> €
        </li>
      <?php endwhile; ?>
      </ul>
      <?php endif; ?>
  <?php endwhile; ?>
  <?php else : ?>
    <?php get_template_part( 'template-parts/content', 'none' ); ?>
    
  <?php endif; ?>
  <div class="commentaire ml-auto">
  <?php comments_template(); ?>
  </div>
  </div>

  </div>
</main>
<?php get_footer() ?>