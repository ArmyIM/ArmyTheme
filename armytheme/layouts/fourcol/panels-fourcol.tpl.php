<?php
/**
 * @file
 * Template for a 4 column panel layout.
 *
 * This template provides a four column panel display layout, with
 * each column roughly equal in width.

 */
?>

<div class="row panel-4col" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="col-xs-12 col-sm-3 first">
    <div class="inside"><?php print $content['left']; ?></div>
  </div>

  <div class="col-xs-12 col-sm-3">
    <div class="inside"><?php print $content['midleft']; ?></div>
  </div>
  
  <div class="col-xs-12 col-sm-3">
    <div class="inside"><?php print $content['midright']; ?></div>
  </div>

  <div class="col-xs-12 col-sm-3 last">
    <div class="inside"><?php print $content['right']; ?></div>
  </div>

<?php if (!empty($content['bottom'])): ?>
   <div class="col-xs-12">
    <div class="inside"><?php print $content['bottom']; ?></div>
  </div>
   <?php endif; ?>
</div>
