<?php
function ds_bootstrap_6_6_stacked () {
  return array(
    'label' => t('Bootstrap 2 Column with Stacked Top and Bottom Columns'),
    'regions' => array(
      'top' => t('Top content'),
	  'left' => t('Left content'),
   	  'right' => t('Right content'),
   	  'bottom' => t('Bottom content'),

     ),

    'image' => TRUE,
      );
}
