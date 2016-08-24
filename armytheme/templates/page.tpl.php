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
?>




<nav class="pushy pushy-left">
	<?php print render($page['mobile_header']); ?>
</nav>

<div class="site-overlay"></div>


<div id="header" role="banner" class="header push">
	<div class="container <?php print $container_class; ?>">


		<button class="hamburger pushy-link" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      	</button>


  		<a id="logo-mobile" href="index.php"><span class="sr-only">Australian Army logo</span></a>


      <div id="top-nav">               
			<?php print render($page['top']); ?>
     </div>


	<?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

<?php if (!empty($page['navigation'])): ?>
        <div id="main-nav" role="navigation">
            <?php print render($page['navigation']); ?>
        </div>      
    <?php endif; ?>



  </div>
</div>






  <?php if (drupal_is_front_page() && !empty($page['highlighted'])) {
    ?>
      
        <?php print render($page['highlighted']); ?>
<?php
}
?>





 <?php if (!drupal_is_front_page() && !empty($page['highlighted'])) {
    ?>
    <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
<?php
}
?>


<div class="body-wrap">

<div class="content-container <?php print $container_class; ?>" id="container">

      <?php print $breadcrumb; ?>
 

<div class="row">


      <div class="col-xs-12">


      <?php print render($title_suffix); ?>
     
      <?php if (!empty($messages)): ?>
          <div class="col-xs-12">
      <?php print $messages; ?>
 </div>
      <?php endif; ?>

      <?php if (!empty($tabs)): ?>
        <div class="col-xs-12">
        <?php print render($tabs); ?>
        </div>
      <?php endif; ?>


    <?php if (!empty($page['sidebar_first'])): ?>
      <aside id="secondary" class="aside col-sm-3" role="complementary">
      
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>










<?php if (!empty($page['sidebar_second'])): ?>
    <div class="col-xs-12 col-sm-6">
<?php elseif (!empty($page['sidebar_first'])): ?>
    <div class="col-xs-12 col-sm-9">
 <?php else: ?>
  <div class="col-xs-12 col-sm-12">
<?php endif; ?>




      <a id="main-content"></a>
      <?php print render($title_prefix); ?>


      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>





 <?php if (drupal_is_front_page() && !empty($page['featured'])) {
    ?>
      
        <?php print render($page['featured']); ?>
<?php
}
?>

      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>

      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>




      <?php print render($page['content']); ?>

</div>


    <?php if (!empty($page['sidebar_second'])): ?>
      <aside id="tertiary" class="aside" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>

</div>
</div>
</div>

</div>


<?php if (!empty($page['footer'])): ?>
  <footer class="footer <?php print $container_class; ?>">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>


<script id="twitter-wjs" type="text/javascript" async defer src="//platform.twitter.com/widgets.js"></script>