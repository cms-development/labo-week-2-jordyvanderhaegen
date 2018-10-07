<?php /* Template Name: Full Width */ ?>
<!-- Header -->
<?php get_header(); ?>
<div class="container">
  <!-- Als er posts zijn, loop over de posts -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title() ?></h1>
    <?php the_content() ?>
    <!-- Loop sluiten -->
    <?php endwhile; ?>
    <!-- Geen posts -->
    <?php else : ?>
  <!-- Sluit if -->
  <?php endif; ?>
</div>
<!-- Footer -->
<?php get_footer(); ?>