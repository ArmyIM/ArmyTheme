<div class="gallery" data-featherlight-gallery data-featherlight-filter="a">
<?php if ($rows): ?>
      <?php print $rows; ?>
     <?php endif; ?>
</div>

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