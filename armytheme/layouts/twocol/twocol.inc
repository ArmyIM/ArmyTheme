<?php

// Plugin definition
$plugin = array(
  'title' => t('Two column'),
  'category' => t('Columns: 2'),
  'icon' => 'twocol.png',
  'theme' => 'panels_twocol',
  'css' => '/dist/css/panels.css.min',
  'regions' => array(
    'left' => t('Left side'),
    'right' => t('Right side')
  ),
);
