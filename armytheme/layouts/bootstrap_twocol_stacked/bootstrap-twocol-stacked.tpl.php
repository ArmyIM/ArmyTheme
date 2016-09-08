  <div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if (!empty($content['top'])): ?>
  <div class="row">
    <?php print $content['top']; ?>
  </div>
  <?php endif; ?>


  <div class="row">
    <div class="panel-col-left">
    <?php print $content['left']; ?>
    </div>
    <div class="panel-col-right">
    <?php print $content['right']; ?>
    </div>
  </div>

  <?php if (!empty($content['bottom'])): ?>
  <div class="row">
    <?php print $content['bottom']; ?>
  </div>
 <?php endif; ?>
 </div>