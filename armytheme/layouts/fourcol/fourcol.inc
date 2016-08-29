<?php

// Plugin definition
$plugin = array(
  'title' => t('Four column'),
  'category' => t('Columns: 4'),
  'icon' => 'fourcol.png',
  'theme' => 'panels_fourcol',
  'css' => '/dist/css/panels.css.min',
  'regions' => array(
    'left' => t('Left side'),
    'midleft' => t('Middle left'),
    'midright' => t('Middle right'),
    'right' => t('Right side')
   ),
);
