<?php

/**
 * @file
 * Bootstrap 6-6 stacked template for Display Suite.
 */
?>

<?php if (!empty($top)): ?>
<div class="top-col">
<div class="inside">
	<?php print $top; ?>
	<?php if (!empty($drupal_render_children)): ?>
	<?php print $drupal_render_children ?>
	<?php endif; ?>
</div>
</div>
<?php endif; ?>


<?php if (!empty($main)): ?>
<div class="main-col">
	<?php print $main; ?>
	<?php if (!empty($drupal_render_children)): ?>
	<?php print $drupal_render_children ?>
	<?php endif; ?>
</div>
<?php endif; ?>


<?php if (!empty($bottom)): ?>
<div class="bottom-col">
<div class="inside">
	<?php print $bottom; ?>
	<?php if (!empty($drupal_render_children)): ?>
	<?php print $drupal_render_children ?>
	<?php endif; ?>
</div>
</div>
<?php endif; ?>
