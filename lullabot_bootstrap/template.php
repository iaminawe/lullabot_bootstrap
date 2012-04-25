<?php


function lullabot_bootstrap_preprocess_html(&$variables) {
  drupal_add_css('http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic', array('type' => 'external'));
}




function lullabot_bootstrap_preprocess_block(&$variables, $hook) {
  $variables['classes_array'][] = 'clearfix';
}






  /**
   * Override or insert variables into the page template.
   */
function lullabot_bootstrap_preprocess_page(&$vars) {

  $vars['search'] = drupal_get_form('search_form');

  $vars['search']['basic']['keys']['#title_display'] = 'invisible';
  $vars['search']['basic']['keys']['#attributes']['class'][] = 'search-input';
  $vars['search']['basic']['keys']['#attributes']['placeholder'] = t('search');
  $vars['search']['#prefix'] = '<h2 class="element-invisible">' . t('Search') . '</h2>';
  $vars['search']['#suffix'] = '<a href="/search" class="search-link visible-desktop">' . t('Advanced Search') . '</a>';


  if (isset($vars['main_menu'])) {
    $vars['primary_nav'] = theme('links__system_main_menu', array(
      'links' => $vars['main_menu'],
      'attributes' => array(
        'class' => array('links', 'inline', 'main-menu', 'nav'),
      ),
      'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      )
    ));
  }
}



function lullabot_bootstrap_content_span($columns = 1) {
  $class = FALSE;

  switch($columns) {
    case 1:
      $class = 'span12';
      break;
    case 2:
      $class = 'span8';
      break;
    case 3:
      $class = 'span4';
      break;
  }

  return $class;
}