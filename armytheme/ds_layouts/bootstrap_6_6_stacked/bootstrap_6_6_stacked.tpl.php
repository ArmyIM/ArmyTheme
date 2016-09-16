<?php

/**
 * @file
 * Bootstrap 6-6 stacked template for Display Suite.
 */
?>

<?php print $top; ?>
<?php if (!empty($drupal_render_children)): ?>
  <div class="top-col">
  <div class="inside">
  <?php print $drupal_render_children ?>
  </div>
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
  <div class="bottom-col">
  <div class="inside">
  <?php print $drupal_render_children ?>
  </div>
  </div>
<?php endif; ?>
