<?php 
  global $language;
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 

	// kpr($fields);
	// dpm($fields);
  $title = $fields['title']->content;
  $tag = $fields['field_tag']->content;
  $texto_corto = $fields['field_texto_corto']->content;
  $image = $fields['field_imagen']->content;
?>
<?php print $title; ?>
