<?php

function armytheme_preprocess_page(&$vars, $hook)
{
    drupal_add_js(drupal_get_path('theme', 'armytheme') . '/dist/js/pushy.min.js', array('type' => 'file', 'scope' => 'footer'));
    drupal_add_js('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(
        'type' => 'external'
      ));
    if ($vars['is_front']) {
      drupal_add_js(drupal_get_path('theme', 'armytheme') . '/dist/js/slick.min.js');
    }
}
function armytheme_js_alter(&$javascript) {
    $javascript['misc/jquery.js']['data'] = drupal_get_path('theme', 'armytheme') .
    '/dist/js/jquery-1.12.4.min.js';
    $javascript['misc/jquery.js']['version'] = '1.7.2';
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
     $url = $variables['element']['#items'][$key]['value'];
     $stripwords = array('https','http','www', 'youtube','youtu.be','/','embed',':','com','.');
     $newurl = str_replace($stripwords, "", $url);
     $variables['items'][$key]['#prefix'] ='<div class="video">';
     $variables['items'][$key]['#markup'] = '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $newurl . '" frameborder="0" allowfullscreen=""></iframe>';
     $variables['items'][$key]['#suffix'] ='</div>';
    }
  }
}
?>