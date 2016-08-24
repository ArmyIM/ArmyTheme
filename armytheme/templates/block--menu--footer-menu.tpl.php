<?php

/**
 * @file
 * Slides block view template.

 */
?>

<div id="feature-slides">

 <?php if ($rows): ?>
      <?php print $rows; ?>
     <?php endif; ?>

</div>
 

<?php /* class view */ ?>




         <script src="/sites/all/themes/armytheme/js/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script src="/sites/all/themes/armytheme/js/slick.min.js"></script>
<script>



$('#feature-slides').slick({
  dots: true,	
  centerMode:true,
  pauseOnDotsHover: true,
  infinite: true,
  speed: 300,
  height:450,
  centerPadding:0

 
});

</script>