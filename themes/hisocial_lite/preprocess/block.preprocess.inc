<?php

/**
 * Implements hook_preprocess_page().
 */
function hisocial_lite_preprocess_block(&$variables) {
  // You can use preprocess hooks to modify the variables before they are passed
  // to the theme function or template file.
  // Add template suggestions to appropriate blocks.
  switch ($variables['block']->module) {
    case 'system':
      switch ($variables['block']->delta) {
        case 'main-menu':
          // Any other "system" block is a menu block and should use
          // block--nav.tpl.php
          $variables['theme_hook_suggestions'][] = 'block__nav__main_menu';
          break;
      }
    break;
  }  
}
