<?php
/**
 * @file
 * Stub file for bootstrap_bootstrap_search_form_wrapper().
 */

/**
 * Returns HTML for the Bootstrap search form wrapper.
 *
 * @ingroup theme_functions
 */
function bootstrap_bootstrap_search_form_wrapper($variables) {
  $output = '<div role="search" class="input-group">';
  $output .= '<label class="sr-only" for="search_block_form">Search for:</label>';
  $output .= $variables['element']['#children'];
  $output .= '<span class="input-group-btn">';
  $output .= '<button type="submit" class="btn btn-primary"><span class="fa fa-search"></span><span class="btn-label">Search</span></button>';
  $output .= '</span>';
  $output .= '</div>';
  return $output;
}




