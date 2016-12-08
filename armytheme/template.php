<?php

function armytheme_js_alter(&$js) {
   $js['misc/jquery.js']['data'] = 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js';
}

function armytheme_preprocess_page(&$vars, $hook)
{  
    drupal_add_js(drupal_get_path('theme', 'armytheme') . '/dist/js/pushy.min.js', array('type' => 'file', 'scope' => 'footer'));
}


function armytheme_preprocess_file_entity(&$variables) {
  if ($variables['type'] == 'image') {

    // Alt Text
    if (!empty($variables['field_media_alt_text'])) {
      $variables['content']['file']['#alt'] = $variables['field_media_alt_text']['und'][0]['safe_value'];
    }

    // Title
    if (!empty($variables['field_media_title'])) {
      $variables['content']['file']['#title'] = $variables['field_media_title']['und'][0]['safe_value'];
    }
  }
}

function armytheme_menu_tree__primary(&$variables) {
  return '<ul class="menu nav">' . $variables['tree'] . '</ul>';
}
function armytheme_menu_link__main_menu($variables)
{
  $element = $variables['element'];
  $sub_menu = '';
  if ($element['#below']) {
     if($element['#theme'][0] === 'menu_link__menu_block__6'){
       unset($element['#below']['#theme_wrappers']);
      $sub_menu = '<ul class="pushy-submenu">' . drupal_render($element['#below']) . '</ul>';
      $element['#attributes']['class'][] = 'pushy-submenu';

    } elseif ((!empty($element['#original_link']['depth'])) && $element['#original_link']['depth'] > 1) {
      unset($element['#below']['#theme_wrappers']);
      $sub_menu = '<ul class="dropdown-menu-nav">' . drupal_render($element['#below']) . '</ul>';
      $element['#attributes']['class'][] = 'dropdown-submenu';
      $element['#localized_options']['html'] = TRUE;
      $element['#localized_options']['attributes']['class'][] = 'dropdown-toggle';
      $element['#localized_options']['attributes']['data-toggle'] = 'dropdown';
    } else {
      unset($element['#below']['#theme_wrappers']);
      $sub_menu = '<ul class="dropdown-menu-nav">' . drupal_render($element['#below']) . '</ul>';
     // $element['#title'] .= ' <span class="caret"></span>';
      $element['#attributes']['class'][] = 'dropdown';
      $element['#localized_options']['html'] = TRUE;
      $element['#localized_options']['attributes']['class'][] = 'dropdown-toggle';
      $element['#localized_options']['attributes']['data-toggle'] = 'dropdown';
    }
  }
  if (($element['#href'] == $_GET['q'] || ($element['#href'] == '<front>' && drupal_is_front_page())) && (empty($element['#localized_options']['language']))) {
    $element['#attributes']['class'][] = 'active';
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function armytheme_preprocess_field(&$variables) {
  $items = $variables['items'];
  $node = $variables['element']['#object'];
  if (($variables['element']['#field_name'] == 'field_media_url') OR ($variables['element']['#field_name'] == 'field_video_url')){
    foreach($variables['items'] as $key => $item){
      $string = $variables['element']['#items'][$key]['value'];
      $regex = '/\b(http?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i';
      preg_match_all($regex, $string, $matches);

      $urls = $matches[0];
      $newurl = str_replace( 'http://', 'https://', $urls );

      // go over all links
      foreach($newurl as $url) 
      {
        echo '<iframe width="480" height="320" src="'.$url.'" frameborder="1" allowfullscreen></iframe>';
      }
    }
  }
}

?>

