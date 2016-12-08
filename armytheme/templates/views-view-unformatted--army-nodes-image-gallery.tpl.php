<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<?php foreach ($rows as $id => $row): ?>
  <div class="gallery" data-featherlight-gallery data-featherlight-filter="a">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>



<script>
jQuery(document).ready(function($) {
$('.gallery').featherlightGallery({
            gallery: {
                fadeIn: 300,
                fadeOut: 300,
                next: 'next »',
                previous: '« previous'
            },
            openSpeed:    300,
            closeSpeed:   300
        });
});
</script>