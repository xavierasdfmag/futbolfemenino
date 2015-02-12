<?php print render($page['content']) ?>

<?php drupal_add_js($theme_path.'/js/vendor/jquery.js', array('type' => 'file', 'scope' => 'footer')); ?>
<?php drupal_add_js($theme_path.'/js/foundation.min.js', array('type' => 'file', 'scope' => 'footer')); ?>
<?php drupal_add_js($theme_path.'/js/app.js', array('type' => 'file', 'scope' => 'footer')); ?>