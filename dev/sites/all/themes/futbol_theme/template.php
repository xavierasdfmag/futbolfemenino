<?php

$viewport = array(
  '#tag' => 'meta', 
  '#attributes' => array(
    'name' => 'viewport', 
    'content' => 'width=device-width, initial-scale=1.0, user-scalable=no',
  ),
);
drupal_add_html_head($viewport, 'viewport');

drupal_add_js(path_to_theme() . '/js/vendor/jquery.js', array(
  'scope' => 'footer',
  'group' => JS_THEME,
  'every_page' => TRUE,
  'weight' => 1,
));
drupal_add_js(path_to_theme() . '/js/foundation.min.js', array(
  'scope' => 'footer',
  'group' => JS_THEME,
  'every_page' => TRUE,
  'weight' => 2,
));
drupal_add_js(path_to_theme() . '/js/app.js', array(
  'scope' => 'footer',
  'group' => JS_THEME,
  'every_page' => TRUE,
  'weight' => 3,
));
drupal_add_js(path_to_theme() . '/js/jquery.autopager-1.0.0.js', array(
  'scope' => 'footer',
  'group' => JS_THEME,
  'every_page' => TRUE,
  'weight' => 4,
));
drupal_add_js(path_to_theme() . '/js/jquery.infinitescroll.min.js', array(
  'scope' => 'footer',
  'group' => JS_THEME,
  'every_page' => TRUE,
  'weight' => 5,
));
drupal_add_js(path_to_theme() . '/js/views_infinite_scroll.js', array(
  'scope' => 'footer',
  'group' => JS_THEME,
  'every_page' => TRUE,
  'weight' => 6,
));
