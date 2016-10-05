<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup templates
 */
?><!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie7" lang="en"><![endif]-->
<!--[if IE 8]><html class="lt-ie8" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <link rel="profile" href="<?php print $grddl_profile; ?>" />
  <meta charset="utf-8">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
<?php print $scripts; ?>
</head> 
<body <?php print $body_attributes; ?>>
<!--[if lt IE 7]>
<div class="message-outdated">
    <p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    </div>
<![endif]-->
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57c9545832e949a6"></script>
</body>
</html>