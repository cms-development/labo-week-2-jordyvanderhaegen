<!-- Header -->
<?php get_header(); ?>
<div class="container">
  <h1>Recent</h1>
  <?php $recent_posts = wp_get_recent_posts(array('numberposts' => 2, 'order' => 'DESC')) ?>
  <?php foreach($recent_posts as $recent): ?>
    <div class="card mb-3">
        <div class="card-header">
        <?= $recent['post_title'] ?>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
          <?= $recent['post_content'] ?>
          </blockquote>
        </div>
    </div>
  <?php endforeach; ?>
  <h1>Weetjes</h1>
  <?php $mycustomquery = new WP_Query(array('category_name' => 'weetjes', 'posts_per_page' => 2)); ?>
  <?php if ($mycustomquery->have_posts()) : while($mycustomquery->have_posts()) : $mycustomquery->the_post() ?>
    <div class="card mb-3">
      <div class="card-header">
      <?= $recent['post_title'] ?>
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
        <?= $recent['post_content'] ?>
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


<!-- Sidebar -->
<?php get_sidebar(); ?>
<!-- Footer -->
<?php get_footer(); ?>
