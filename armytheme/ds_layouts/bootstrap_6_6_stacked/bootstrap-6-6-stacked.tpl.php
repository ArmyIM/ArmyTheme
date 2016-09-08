<?php

/**
 * @file
 * Bootstrap 6-6 stacked template for Display Suite.
 */
?>


<?php print $top; ?>
<?php if (!empty($drupal_render_children)): ?>
  <div class="col-xs-12">
  <?php print $drupal_render_children ?>
  </div>
<?php endif; ?>


<?php print $left; ?>
<?php if (!empty($drupal_render_children)): ?>
  <div class="left-col">
  <?php print $drupal_render_children ?>
  </div>
<?php endif; ?>


<?php print $right; ?>
<?php if (!empty($drupal_render_children)): ?>
  <div class="right-col">
  <?php print $drupal_render_children ?>
  </div>
<?php endif; ?>



<?php print $bottom; ?>
<?php if (!empty($drupal_render_children)): ?>
  <div class="col-xs-12">
  <?php print $drupal_render_children ?>
  </div>
<?php endif; ?>
