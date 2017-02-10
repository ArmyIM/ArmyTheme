  <div class="panel-2col-stacked clearfix <?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php if (!empty($content['top'])): ?>
    <div class="top-col">
      <?php print $content['top']; ?>
    </div>
    <?php endif; ?>


    <?php if (!empty($content['left'])): ?>
      <div class="left-col">
        <?php print $content['left']; ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($content['right'])): ?>
      <div class="right-col">
        <?php print $content['right']; ?>
      </div>
    <?php endif; ?>


    <?php if (!empty($content['middle'])): ?>
      <div class="middle-col">
        <?php print $content['middle']; ?>
      </div>
    <?php endif; ?>


    <?php if (!empty($content['bottom'])): ?>
    <div class="bottom-col">
      <div class="inside">
        <?php print $content['bottom']; ?>
      </div>
    </div>
    <?php endif; ?>
 </div>