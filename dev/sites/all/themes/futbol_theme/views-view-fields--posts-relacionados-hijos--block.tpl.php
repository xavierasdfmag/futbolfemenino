<?php 
  global $language;
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 

	// kpr($fields);
	// dpm($fields);
  $title = $fields['title']->content;
  $views = $fields['view']->content;
  $tag = $fields['field_tag']->content;
  $llamada = $fields['field_llamada']->content;
  $image = $fields['field_imagen']->content;
  $count = $fields['counter']->content;
  $share = $fields['sharethis']->content;
  $path_post = $fields['path']->content;
?>
<?php  //$total = count($view->result); ?>

<li><a href="#"><?php print $title; ?></a></li>


