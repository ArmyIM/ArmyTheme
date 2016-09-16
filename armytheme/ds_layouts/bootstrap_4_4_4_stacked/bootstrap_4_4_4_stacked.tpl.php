<?php
/**
 * @file
 * Bootstrap 4-4-4 Stacked template for Display Suite.
 */
?>


<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes; ?>">
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  <?php if ($top): ?>
    <div class="row">
      <<?php print $top_wrapper; ?> class="top-col <?php print $top_classes; ?>">
      <div class="inside">
        <?php print $top; ?>
      </<?php print $top_wrapper; ?>>
      </div>
    </div>
  <?php endif; ?>


  <?php if ($central && !$left && !$right): ?>
        <div class="row">
        <<?php print $central_wrapper; ?> class="col-xs-12 <?php print $central_classes; ?>">
        <?php print $central; ?>
        </<?php print $central_wrapper; ?>>
        </div>
  <?php endif; ?>


  <?php if ($left && $central && !$right): ?>
        <div class="row">
        <<?php print $left_wrapper; ?> class="col-sm-6 <?php print $left_classes; ?>">
        <?php print $left; ?>
        </<?php print $left_wrapper; ?>>

        <<?php print $central_wrapper; ?> class="col-sm-6 <?php print $central_classes; ?>">
        <?php print $central; ?>
        </<?php print $central_wrapper; ?>>
        </div>
  <?php endif; ?>


  <?php if ($left && $right && !$central): ?>
        <div class="row">
        <<?php print $left_wrapper; ?> class="col-sm-6 <?php print $left_classes; ?>">
        <?php print $left; ?>
        </<?php print $left_wrapper; ?>>

        <<?php print $right_wrapper; ?> class="col-sm-6 <?php print $right_classes; ?>">
        <?php print $right; ?>
        </<?php print $right_wrapper; ?>>
        </div>
  <?php endif; ?>


  <?php if ($central && $right && !$left): ?>
        <div class="row">
        <<?php print $central_wrapper; ?> class="col-sm-6 <?php print $central_classes; ?>">
        <?php print $central; ?>
        </<?php print $central_wrapper; ?>>

        <<?php print $right_wrapper; ?> class="col-sm-6 <?php print $right_classes; ?>">
        <?php print $right; ?>
        </<?php print $right_wrapper; ?>>
        </div>
  <?php endif; ?>


  <?php if ($left && $central && $right): ?>
    <div class="row">
        <<?php print $left_wrapper; ?> class="col-sm-6<?php print $left_classes; ?>">
        <?php print $left; ?>
        </<?php print $left_wrapper; ?>>


        <<?php print $right_wrapper; ?> class="col-sm-6 <?php print $right_classes; ?>">
        <?php print $right; ?>
        </<?php print $right_wrapper; ?>>


        <<?php print $central_wrapper; ?> class="col-xs-12 <?php print $central_classes; ?>">
        <?php print $central; ?>
        </<?php print $central_wrapper; ?>>

    </div>
  <?php endif; ?>



  <?php if ($bottom): ?>
    <div class="row">
      <<?php print $bottom_wrapper; ?> class="bottom-col <?php print $bottom_classes; ?>">
      <div class="inside">
        <?php print $bottom; ?>
      </<?php print $bottom_wrapper; ?>>
      </div>
    </div>
  <?php endif; ?>
</<?php print $layout_wrapper ?>>


<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
