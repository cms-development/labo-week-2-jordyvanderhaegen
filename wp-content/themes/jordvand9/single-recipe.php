<div>
<?php get_header(); ?>
<div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1 class="mt-4"><?= the_title(); ?></h1>
    <h5 class="mb-4 mt-2"><?= get_post_meta(get_the_ID(), 'introtekst', TRUE)?></h5>
    <?= the_content() ?>
    <p><strong>Tips: </strong><?= get_post_meta(get_the_ID(), 'extra_tips', TRUE)?></p>
    <p><strong>Ingrediënten: </strong><?= get_post_meta(get_the_ID(), '_recipe_ingredient', TRUE)?></p>
    <p><?= get_the_term_list(get_the_ID(), 'allergeen', '<strong>Allergenen: </strong>')?></p>
    <p><strong>Alcohol: </strong><?= get_post_meta(get_the_ID(), 'alcohol', TRUE)?></p>
    <p><?= get_the_term_list(get_the_ID(), 'difficulty', '<strong>Moeilijkheid: </strong>')?></p>
    <div class="row mt-5">
      <div class="col-4">
        <img style="width:100%" src="<?= wp_get_attachment_url(get_post_meta($post->ID, 'image1', true), 'medium') ?>" alt="">
      </div>
      <div class="col-4">
        <img style="width:100%" src="<?= wp_get_attachment_url(get_post_meta($post->ID, 'image2', true), 'medium') ?>" alt="">
      </div>
    </div>
    <!-- Loop sluiten -->
    <?php endwhile; ?>
      <!-- Geen posts -->
      <?php else : ?>
  <!-- Sluit if -->
  <?php endif; ?>
</div>
<?php get_footer(); ?>