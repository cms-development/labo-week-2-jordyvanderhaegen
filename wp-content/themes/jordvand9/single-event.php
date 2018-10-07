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
      <?php $location = get_post_meta(get_the_ID(), 'locatie', TRUE); ?>
      <?php $location['perma_link'] = get_post_permalink()?>
      <?php foreach(get_post_meta(get_the_ID(), 'betaalmogelijkheden', TRUE) as $item) {
        echo '<li class="list-group-item">' . $item . '</li>';
      } ?>
    </ul>
    <div class="mt-4" id="mapid" style="height: 400px; width: 100%; margin: 0 auto;"></div>
    
    <!-- Loop sluiten -->
    <?php endwhile; ?>
      <!-- Geen posts -->
      <?php else : ?>
  <!-- Sluit if -->
  <?php endif; ?>
</div>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
<script>
  const loc = <?php echo json_encode($location); ?>;
  let mymap = L.map('mapid').setView([-37.815018, 144.946014], 13);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      maxZoom: 12,
  }).addTo(mymap);
  L.marker([loc.lat, loc.lng]).addTo(mymap).on('click', () => window.location = loc.perma_link);
</script>
<?php get_footer(); ?>