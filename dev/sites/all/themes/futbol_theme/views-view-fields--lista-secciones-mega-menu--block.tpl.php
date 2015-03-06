<?php 
  global $language;
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 

	// kpr($fields);
	// dpm($fields);
  //die(print_r($fields));
	$name = $fields['field_titulo_principal']->content;
	$link = $fields['field_link_principal']->content;
?>
<li><a href="http://futbolfemenino.pe/dev/<?php print $link; ?>"><?php print $name; ?></a></li>