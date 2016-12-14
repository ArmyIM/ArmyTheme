<?php foreach ($rows as $id => $row): ?>
  <div id="feature-slides" style="display:none;">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>




<div id="dots-nav" class="container"></div>
<script>
jQuery(document).ready(function($) {
  var $slider = $('#feature-slides')
  		.on('init', function(slick) {
            $('#feature-slides').fadeIn(1000);
        })
  .slick({
			      focusOnSelect: true,
            autoPlay: true,
            lazyLoad: 'ondemand',
            dots: true,
            centerMode: true,
            pauseOnDotsHover: true,
            infinite: true,
            speed: 300,
            arrows:true,
            height: 450,
            centerPadding: 0,
            appendDots: $('#dots-nav')
  });
 });
</script>