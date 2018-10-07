<div>
<?php get_header(); ?>
<div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1 class="mt-4"><?= the_title(); ?></h1>
    <h5 class="mb-4 mt-2"><?= get_post_meta(get_the_ID(), 'introtekst', TRUE)?></h5>
    <?= the_content() ?>
    <p><strong>Datum: </strong><?= get_post_meta(get_the_ID(), 'datum', TRUE)?></p>
    <ul class="list-group">
      <li class="list-group-item active"> Betaalmogelijkheden</li>
      <?php foreach(get_post_meta(get_the_ID(), 'betaalmogelijkheden', TRUE) as $item) {
        echo '<li class="list-group-item">' . $item . '</li>';
      } ?>
    </ul>
    
    <!-- Loop sluiten -->
    <?php endwhile; ?>
      <!-- Geen posts -->
      <?php else : ?>
  <!-- Sluit if -->
  <?php endif; ?>
</div>
<?php get_footer(); ?>