<?php

/**
 * @file
 * Bootstrap 2 column template.
 */

?>
<div class="col-xs-12 col-sm-8">


<?php print $left; ?>
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
</div>

<div class="col-xs-12 col-sm-4">

<?php print $right; ?>
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
</div>