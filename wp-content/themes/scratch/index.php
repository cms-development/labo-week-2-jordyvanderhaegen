<!-- Header -->
<?php get_header(); ?>
<!-- Als er posts zijn, loop over de posts -->
<?php if (have_posts()) : while(have_posts()) : the_post() ?>
  <h1><?php the_title(); ?></h1>
  <div><?php the_content() ?></div>
  <!-- Loop sluiten -->
  <?php endwhile; ?>
  <!-- Geen posts -->
  <?php else : ?>
<!-- Sluit if -->
<?php endif; ?>
<div>
<?php $mycustomquery = new WP_Query(array('category_name' => 'algemeen', 'posts_per_page' => 2)); ?>
<?php if (have_posts()) : while($mycustomquery->have_posts()) : the_post() ?>
  <h1><?php the_title(); ?></h1>
  <div><?php the_content() ?></div>
  <!-- Loop sluiten -->
  <?php endwhile; ?>
  <!-- Geen posts -->
  <?php else : ?>
<!-- Sluit if -->
<?php endif; ?>
</div>
<!-- Sidebar -->
<?php get_sidebar(); ?>
<!-- Footer -->
<?php get_footer(); ?>