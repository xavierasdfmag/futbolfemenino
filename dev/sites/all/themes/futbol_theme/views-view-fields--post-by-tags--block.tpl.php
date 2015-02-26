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
	$llamada = $fields['field_llamada']->content;
	$image = $fields['field_imagen']->content;
?>

<div class="row post-by-tag">
  <div class="small-4 columns image">
    <img src="<?php print $image; ?>">
  </div>
  <div class="small-8 columns">
      <p class="tag"><?php print $tag; ?></p>
      <p class="titulo"><?php print $title; ?></p>
      <p class="llamada"><?php print $llamada; ?></p>
    
  </div>  
</div>


