<?php

/**
 * @file
 * Bootstrap 2 column template.
 */

?>

<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes; ?>">

<div class="left-col">
<?php print $left; ?>
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
</div>

<div class="right-col">
<?php print $right; ?>
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
</div>

</<?php print $layout_wrapper ?>>

