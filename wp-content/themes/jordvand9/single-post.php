<!-- Header -->
<?php get_header(); ?>
<div class="container">
  <!-- Als er posts zijn, loop over de posts -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="card">
      <div class="card-header">
        <?php the_title() ?>
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <?php the_content() ?>
        </blockquote>
      </div>
    </div>
    <!-- Loop sluiten -->
    <?php endwhile; ?>
    <!-- Geen posts -->
    <?php else : ?>
  <!-- Sluit if -->
  <?php endif; ?>
</div>
<!-- Footer -->
<?php get_footer(); ?>