<?php

/* Add Default Styling */

drupal_add_css(drupal_get_path('theme', 'bs_solikon') . '/css/default.css', array('weight' => CSS_THEME, 'type' => 'file'));

/* Custom Styles */

$style = theme_get_setting('style');

switch ($style) {
	case 0:
		drupal_add_js(drupal_get_path('theme', 'bs_solikon') . "/js/scripts-style1.js");
		drupal_add_css(drupal_get_path('theme', 'bs_solikon') . '/css/style1.css', array('weight' => CSS_THEME, 'type' => 'file'));
		break;
	default:
  	drupal_add_js(drupal_get_path('theme', 'bs_solikon') . "/js/scripts-style1.js");
		drupal_add_css(drupal_get_path('theme', 'bs_solikon') . '/css/style1.css', array('weight' => CSS_THEME, 'type' => 'file'));

			case 1:
		drupal_add_js(drupal_get_path('theme', 'bs_solikon') . "/js/scripts.js");
		drupal_add_css(drupal_get_path('theme', 'bs_solikon') . '/css/style-solikon.css', array('weight' => CSS_THEME, 'type' => 'file'));
		break;
	default:
  	drupal_add_js(drupal_get_path('theme', 'bs_solikon') . "/js/scripts.js");
		drupal_add_css(drupal_get_path('theme', 'bs_solikon') . '/css/style-solikon.css', array('weight' => CSS_THEME, 'type' => 'file'));
}

/* Get Custom CSS */

$css = theme_get_setting('css');

  if  ($css == 1) {
    drupal_add_css(drupal_get_path('theme', 'bs_solikon') . '/css/custom.css', array('weight' => CSS_THEME, 'type' => 'file'));
  }
