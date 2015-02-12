<?php
  global $language;
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 
?>
<?php print render($page['content']) ?>

<?php drupal_add_js($pathfile.'/js/vendor/jquery.js', array('type' => 'file', 'scope' => 'footer')); ?>
<?php drupal_add_js($pathfile.'/js/foundation.min.js', array('type' => 'file', 'scope' => 'footer')); ?>
<?php drupal_add_js($pathfile.'/js/app.js', array('type' => 'file', 'scope' => 'footer')); ?>