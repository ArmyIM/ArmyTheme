  <div class="panel-1col clearfix <?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if (!empty($content['top'])): ?>
  <div class="top-col">
    <?php print $content['top']; ?>
  </div>
  <?php endif; ?>

    <div class="middle-col">
    <?php print $content['middle']; ?>
    </div>
 
  <?php if (!empty($content['bottom'])): ?>
  <div class="bottom-col">
  <div class="inside">
    <?php print $content['bottom']; ?>
    </div>
  </div>
 <?php endif; ?>
 </div>