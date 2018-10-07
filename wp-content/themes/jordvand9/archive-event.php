<?php /* Template Name: Archive Event */ ?>
<?php get_header(); ?>
<?php $mycustomquery = new WP_Query(array('post_type' => 'event')); ?>
<div class="container mt-4">
  <div class="row">
  <div id="mapid" style="height: 400px; width: 1000px; margin: 0 auto;"></div>
  <?php $loc_arr = array(); ?>
  <?php if ($mycustomquery->have_posts()) : while($mycustomquery->have_posts()) : $mycustomquery->the_post() ?>
    <?php $location = get_post_meta(get_the_ID(), 'locatie', TRUE); ?>
    <?php $location['perma_link'] = get_post_permalink()?>
    <?php array_push($loc_arr, $location); ?>
    <!-- Loop sluiten -->
    <?php endwhile; ?>
    <!-- Geen posts -->
    <?php endif; ?>
  </div>
</div>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
<script>
  const locs = <?php echo json_encode($loc_arr); ?>;
  let mymap = L.map('mapid').setView([-37.815018, 144.946014], 13);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      maxZoom: 12,
  }).addTo(mymap);
  locs.forEach((loc) => {
    L.marker([loc.lat, loc.lng]).addTo(mymap).on('click', () => window.location = loc.perma_link);
  });
</script>

<?php get_footer(); ?>