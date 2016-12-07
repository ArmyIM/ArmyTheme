<?php
/**
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
$HideRightSideContent = NULL;  
$CategoryImageSmall = NULL;
$HideCategoryImage = NULL;
$OneSidebar = $page[ 'sidebar_first'];
$TwoSidebar = $page[ 'sidebar_second'];

if (isset($node->field_override_with_own_side_con[LANGUAGE_NONE][0]['value']) && $node->field_override_with_own_side_con[LANGUAGE_NONE][0]['value'] == 1 ) :
        $HideRightSideContent = 'hide-global-sidecontent';
endif;

if (isset($node->field_small_category_image[LANGUAGE_NONE][0]['value']) && $node->field_small_category_image[LANGUAGE_NONE][0]['value'] == 1 ) :
        $CategoryImageSmall = 'category-sm-img';  
endif;

if (isset($node->field_hide_category_image[LANGUAGE_NONE][0]['value']) && $node->field_hide_category_image[LANGUAGE_NONE][0]['value'] == 1 ) :
        $HideCategoryImage = 'hide-category-img';  
endif;

if (!empty($TwoSidebar)) {
    $TwoSidebar = 'has-sidebars';
  }

if (!empty($OneSidebar)) {
    $OneSidebar = 'has-sidebar';
  }
?>


<?php 
$term=taxonomy_term_load($node->field_hide_category_image['und'][0]['tid']);

if ($term == 1) {
  echo 'taxonomy_term_load';
}
?>

<?php if ($node->field_hide_category_image['und'][0]['value'] == 1) {
  echo'node';
}

 ?>



<nav class="pushy pushy-left">
  <?php print render($page[ 'mobile_header']); ?> </nav>
<div class="site-overlay"></div>

<div id="header" role="banner" class="header push">
  <div class="container <?php print $container_class; ?>">
    
    <div class="mobile-header visible-xs">
      <button class="hamburger pushy-link" type="button"> <span class="hamburger-box">
        <span class="hamburger-inner"></span></span>
      </button> 
      <a id="logo-mobile" href="<?php print $front_page; ?>">
        <img src="<?php print $logo; ?>" alt="Australian Army" />
      </a> 
    </div>

    <div id="top-nav">
      <?php print render($page[ 'top']); ?> 
    </div>
    <?php if ($logo): ?> 
    <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
      <img src="<?php print $logo; ?>" alt="Australian Army" />
    </a>
    <?php endif; ?>

    <?php if (!empty($page[ 'navigation'])): ?>
    <div id="main-nav" role="navigation">
      <?php print render($page[ 'navigation']); ?>
    </div>
    <?php endif; ?> 

  </div>
</div>

<div class="body-wrap">
  <?php if (drupal_is_front_page() && !empty($page[ 'highlighted'])) {?>
  <?php print render($page[ 'highlighted']); ?>
  <?php }?>

  <?php if (!drupal_is_front_page() && !empty($page[ 'highlighted'])) {?>
  <div class="highlighted jumbotron">
    <?php print render($page[ 'highlighted']); ?>
  </div>
  <?php }?>

  <div class="content-container <?php $HideRightSideContent;?> <?php $CategoryImageSmall; ?> <?php $HideCategoryImage; ?> <?php print $container_class; ?>" id="container">
    <?php print $breadcrumb; ?>
    <?php print render($title_suffix); ?>
    <?php if (!empty($messages)): ?>
    <?php print $messages; ?>
    <?php endif; ?>
    <?php if (!empty($tabs)): ?>
    <?php print render($tabs); ?>
    <?php endif; ?>

    <?php if (!empty($page[ 'sidebar_first'])): ?>
    <div id="secondary" class="aside" role="complementary">
      <?php print render($page[ 'sidebar_first']); ?>
    </div>
    <?php endif; ?>

    <div class="main-content <?php print $OneSidebar ?> <?php print $TwoSidebar ?>">
        <a id="main-content"></a>

        <?php print render($title_prefix); ?>
          <?php if (!empty($title)): ?>
            <h1 class="page-header">
              <?php print $title; ?>
            </h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>

          <?php if (drupal_is_front_page() && !empty($page[ 'featured'])) {?>
          <?php print render($page[ 'featured']); ?>
          <?php }?>
          <?php if (!empty($page[ 'help'])): ?>
          <?php print render($page[ 'help']); ?>
          <?php endif; ?>
          <?php if (!empty($action_links)): ?>
          <ul class="action-links">
            <?php print render($action_links); ?> 
          </ul>
          <?php endif; ?>
          <?php print render($page[ 'content']); ?>
      

        <?php if (!empty($page[ 'sidebar_second'])): ?>
        <div id="tertiary" class="aside" role="complementary">
          <?php print render($page[ 'sidebar_second']); ?> 
        </div>
        <?php endif; ?> 

      </div>    
</div>
</div>

  <?php if (!empty($page[ 'footer'])): ?>
  <div class="footer">
    <?php print render($page[ 'footer']); ?> 
  </div>
  <?php endif; ?>
  <?php if (!empty($page[ 'bottom'])): ?>
  <?php print render($page[ 'bottom']); ?>
  <?php endif; ?>
  <a href="#0" class="scroll-to-top">
    <div class='scroll icon'>
    <span class="fa fa-4x fa-angle-up"></span>
    </div>
  </a>
