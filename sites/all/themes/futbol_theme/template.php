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
