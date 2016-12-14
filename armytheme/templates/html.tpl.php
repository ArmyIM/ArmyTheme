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
  <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
<?php print $scripts; ?>
</head> 
<body <?php print $body_attributes; ?>>
<!--[if lte IE 8]>
<div class="message-outdated alert alert-warning alert-dismissible" role="alert">
<a class="close toc-filter-processed" data-dismiss="alert" href="#">×</a>
    <p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    </div>
<![endif]-->
<div id="my-page">
  <a class="skip-to-content sr-only sr-only-focusable" href="#main-content">Skip to main content</a>
  <a class="skip-to-content sr-only sr-only-focusable hidden-xs" href="#main-nav">Skip to main navigation</a>
  <a class="skip-to-content sr-only sr-only-focusable" href="#edit-search-block-form--2">Skip to search input</a>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</div>
</body>
</html>