<?php
function ds_bootstrap_2col () {
  return array(
    'label' => t('Bootstrap 2 Column'),
    'regions' => array(
	  'left' => t('Left content'),
   	  'right' => t('Right content'),
     ),

    'image' => TRUE,
     'form' => TRUE,
      );
}
