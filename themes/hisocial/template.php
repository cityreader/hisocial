<?php

/**
 * Implements hook_css_alter().
 */
function hisocial_css_alter(&$css) {
  tao_css_alter($css);
}

/**
 * Implementation of hook_theme().
 */
function hisocial_theme() {
  $items = tao_theme();

//  // Consolidate a variety of theme functions under a single template type.
//  $items['block'] = array(
//    'arguments' => array('block' => NULL),
//    'template' => 'object',
//    'path' => drupal_get_path('theme', 'tao') .'/templates',
//  );
//  $items['comment'] = array(
//    'arguments' => array('comment' => NULL, 'node' => NULL, 'links' => array()),
//    'template' => 'object',
//    'path' => drupal_get_path('theme', 'tao') .'/templates',
//  );
//  $items['node'] = array(
//    'arguments' => array('node' => NULL, 'teaser' => FALSE, 'page' => FALSE),
//    'template' => 'node',
//    'path' => drupal_get_path('theme', 'tao') .'/templates',
//  );
//  $items['fieldset'] = array(
//    'arguments' => array('element' => array()),
//    'template' => 'fieldset',
//    'path' => drupal_get_path('theme', 'tao') .'/templates',
//  );
//
//  // Split out pager list into separate theme function.
//  $items['pager_list'] = array('arguments' => array(
//    'tags' => array(),
//    'limit' => 10,
//    'element' => 0,
//    'parameters' => array(),
//    'quantity' => 9,
//  ));

  return $items;
}

/**
 * Preprocess functions ===============================================
 */
function hisocial_preprocess_html(&$vars) {
  $vars['classes_array'][] = 'hisocial';
}

/**
 * Implementation of preprocess_page().
 */
function hisocial_preprocess_page(&$vars) {
  // Split primary and secondary local tasks
  $vars['primary_local_tasks'] = menu_primary_local_tasks();
  $vars['secondary_local_tasks'] = menu_secondary_local_tasks();

//  $block = module_invoke('search', 'block_view', '');
//  $vars['search_box'] = render($block);
  // Link site name to frontpage
//  $vars['site_name'] = l($vars['site_name'], '<front>');
}

/**
 * Implementation of preprocess_block().
 */
function hisocial_preprocess_block(&$vars) {
  tao_preprocess_block($vars);
//
//  $vars['attributes_array']['id'] = $vars['block_html_id'];
//
//  $vars['title_attributes_array']['class'][] = 'block-title';
//  $vars['title_attributes_array']['class'][] = 'clearfix';
//
//  $vars['content_attributes_array']['class'][] = 'block-content';
//  $vars['content_attributes_array']['class'][] = 'clearfix';
//  if ($vars['block']->module == 'block') {
//    $vars['content_attributes_array']['class'][] = 'prose';
//  }
//
//  $vars['title'] = !empty($vars['block']->subject) ? $vars['block']->subject : '';
//
//  // In D7 the page content may be served as a block. Replace the generic
//  // 'block' class from the page content with a more specific class that can
//  // be used to distinguish this block from others.
//  // Subthemes can easily override this behavior in an implementation of
//  // preprocess_block().
//  if ($vars['block']->module === 'system' && $vars['block']->delta === 'main') {
//    $vars['classes_array'] = array_diff($vars['classes_array'], array('block'));
//    $vars['classes_array'][] = 'block-page-content';
//  }
}

/**
 * Implementation of preprocess_node().
 */
function hisocial_preprocess_node(&$vars) {
  tao_preprocess_node($vars);
//  $vars['hook'] = 'node';
//
//  $vars['attributes_array']['id'] = "node-{$vars['node']->nid}";
//
//  $vars['title_attributes_array']['class'][] = 'node-title';
//  $vars['title_attributes_array']['class'][] = 'clearfix';
//
//  $vars['content_attributes_array']['class'][] = 'node-content';
//  $vars['content_attributes_array']['class'][] = 'clearfix';
//  $vars['content_attributes_array']['class'][] = 'prose';
//
//  if (isset($vars['content']['links'])) {
//    $vars['links'] = $vars['content']['links'];
//    unset($vars['content']['links']);
//  }
//
//  if (isset($vars['content']['comments'])) {
//    $vars['post_object']['comments'] = $vars['content']['comments'];
//    unset($vars['content']['comments']);
//  }
//
//  if ($vars['display_submitted']) {
//    $vars['submitted'] = t('Submitted by !username on !datetime', array(
//      '!username' => $vars['name'],
//      '!datetime' => $vars['date'],
//    ));
//  }
}

/**
 * Implementation of preprocess_comment().
 */
function hisocial_preprocess_comment(&$vars) {
  tao_preprocess_comment($vars);
//  $vars['hook'] = 'comment';
//
//  $vars['title_attributes_array']['class'][] = 'comment-title';
//  $vars['title_attributes_array']['class'][] = 'clearfix';
//
//  $vars['content_attributes_array']['class'][] = 'comment-content';
//  $vars['content_attributes_array']['class'][] = 'clearfix';
//
//  $vars['submitted'] = t('Submitted by !username on !datetime', array(
//    '!username' => $vars['author'],
//    '!datetime' => $vars['created'],
//  ));
//
//  if (isset($vars['content']['links'])) {
//    $vars['links'] = $vars['content']['links'];
//    unset($vars['content']['links']);
//  }
}

/**
 * Implementation of preprocess_fieldset().
 */
function hisocial_preprocess_fieldset(&$vars) {
  tao_preprocess_fieldset($vars);
//  $element = $vars['element'];
//  _form_set_class($element, array('form-wrapper'));
//  $vars['attributes'] = isset($element['#attributes']) ? $element['#attributes'] : array();
//  $vars['attributes']['class'][] = 'fieldset';
//  if (!empty($element['#title'])) {
//    $vars['attributes']['class'][] = 'titled';
//  }
//  if (!empty($element['#id'])) {
//    $vars['attributes']['id'] = $element['#id'];
//  }
//
//  $description = !empty($element['#description']) ? "<div class='description'>{$element['#description']}</div>" : '';
//  $children = !empty($element['#children']) ? $element['#children'] : '';
//  $value = !empty($element['#value']) ? $element['#value'] : '';
//  $vars['content'] = $description . $children . $value;
//  $vars['title'] = !empty($element['#title']) ? $element['#title'] : '';
//  $vars['hook'] = 'fieldset';
}

/**
 * Implementation of preprocess_field().
 */
function hisocial_preprocess_field(&$vars) {
  tao_preprocess_field($vars);
//  // Add prose class to long text fields.
//  if ($vars['element']['#field_type'] === 'text_with_summary') {
//    $vars['classes_array'][] = 'prose';
//  }
}

/**
 * Function overrides =================================================
 */

/**
 * Override of theme('textarea').
 * Deprecate misc/textarea.js in favor of using the 'resize' CSS3 property.
 */
function hisocial_textarea(&$variables) {
  return tao_textarea($variables);
}

/**
 * Override of theme_pager().
 * Easily one of the most obnoxious theming jobs in Drupal core.
 * Goals: consolidate functionality into less than 5 functions and
 * ensure the markup will not conflict with major other styles
 * (theme_item_list() in particular).
 */
function hisocial_pager(&$vars) {
  return tao_pager($vars);
}

/**
 * Split out page list generation into its own function.
 */
function hisocial_pager_list(&$vars) {
  return tao_pager_list($vars);
}

/**
 * Return an array suitable for theme_links() rather than marked up HTML link.
 */
function hisocial_pager_link(&$vars) {
  return tao_pager_link($vars);
}

/**
 * Override of theme_views_mini_pager().
 */
function hisocial_views_mini_pager(&$vars) {
  return tao_views_mini_pager($vars);
}

/**
 * Preprocessor for theme('button').
 */
function hisocial_preprocess_button(&$vars) {
  if (isset($vars['element']['#value'])) {
    $vars['element']['#attributes']['class'][] = 'btn';

    $classes = array(
      t('Save') => 'primary',
      t('Submit') => 'primary',
      t('Add') => 'primary',
      t('Delete') => 'danger',
      t('Cancel') => 'danger',
    );
    foreach ($classes as $search => $class) {
      if (strpos($vars['element']['#value'], $search) !== FALSE) {
        $vars['element']['#attributes']['class'][] = $class;
        break;
      }
    }
  }
}

/**
 * Preprocessor for theme('form_element').
 */
function hisocial_preprocess_form_element(&$vars) {
  $element = &$vars['element'];
  switch ($element['#type']) {
    case 'checkbox':
    case 'radio':
      return;
  }
  $element['#children'] = '<div class="input">' . $element['#children'] . '</div>';
}

/**
 * Preprocessor for theme('webform_element').
 */
function hisocial_preprocess_webform_element(&$vars) {
  $element = &$vars['element'];
  switch ($element['#type']) {
    case 'checkbox':
    case 'radio':
      return;
  }
  $element['#children'] = '<div class="input">' . $element['#children'] . '</div>';
}
