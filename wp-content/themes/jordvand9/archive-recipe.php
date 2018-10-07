<?php /* Template Name: Archive Recipe */ ?>
<?php get_header(); ?>
<?php $mycustomquery = new WP_Query(array('post_type' => 'recipe')); ?>
<div class="container mt-4">
  <div class="row">
  <?php if ($mycustomquery->have_posts()) : while($mycustomquery->have_posts()) : $mycustomquery->the_post() ?>
  <div class="col-4 mb-3">
    <div class="card" >
      <img class="card-img-top" src="<?= the_post_thumbnail_url() ?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?= get_the_title() ?></h5>
        <h6 class="pt-2"><?= get_post_meta(get_the_ID(), 'introtekst', TRUE) ?></h6>
        <p><?= get_the_term_list(get_the_ID(), 'difficulty') ?></p>
        <a href="<?= get_post_permalink() ?>" class="btn btn-primary">Bekijk gerecht</a>
      </div>
    </div>
  </div>
    <!-- Loop sluiten -->
    <?php endwhile; ?>
    <!-- Geen posts -->
    <?php endif ; ?>
  </div>
</div>
<?php get_footer(); ?>