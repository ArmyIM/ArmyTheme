<?php

/**
 * @file
 * Slides block view template.

 */
?>

<div id="feature-slides" style="display:none;">

 <?php if ($rows): ?>
      <?php print $rows; ?>
     <?php endif; ?>

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
            lazyLoad: 'ondemand',
            dots: true,
            centerMode: true,
            pauseOnDotsHover: true,
            infinite: true,
            speed: 300,
            arrows:false,
            height: 450,
            centerPadding: 0,
            appendDots: $('#dots-nav')


  });
 });
	
</script>
