<div id="feature-slides" style="display:none;">

  <?php foreach ($rows as $id => $row): ?>
    <div class="caption-wrap">
      <div class="container">
        <div class="caption">
          <?php print $row; ?>
        </div>
      </div>
    </div>
<?php endforeach; ?>



</div>



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