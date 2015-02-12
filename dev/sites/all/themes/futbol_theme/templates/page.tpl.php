<?php
  global $language;
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
?>
<?php print render($page['content']) ?>

<?php drupal_add_js($path.'/js/vendor/jquery.js', array('type' => 'file', 'scope' => 'footer')); ?>
<?php drupal_add_js($path.'/js/foundation.min.js', array('type' => 'file', 'scope' => 'footer')); ?>
<?php drupal_add_js($path.'/js/app.js', array('type' => 'file', 'scope' => 'footer')); ?>