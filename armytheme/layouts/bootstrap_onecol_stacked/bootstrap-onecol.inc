<?php

// Plugin definition
$plugin = array(
  'title' => t('Bootstrap one Columns with top and bottom area'),
  'category' => t('Bootstrap'),
  'icon' => 'bootstrap_onecol.png',
  'theme' => 'bootstrap_onecol',
  'admin css' => '../panels-bootstrap-layouts-admin.css',
  'regions' => array(
    'top' => t('Top'),
    'middle' => t('Middle'),
    'bottom' => t('Bottom'),
  ),
);
