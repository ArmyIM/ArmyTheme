<?php
function ds_bootstrap_2col () {
  return array(
    'label' => t('Bootstrap 2 Column'),
    'regions' => array(
	  'left' => t('Main content'),
   	  'right' => t('Side content'),
     ),

    'image' => TRUE,
      );
}
