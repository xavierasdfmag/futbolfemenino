<?php 
  global $language;
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 

	// kpr($fields);
	// dpm($fields);
	$title = $fields['title']->content;
	$llamada = $fields['field_llamada']->content;
	$image = $fields['field_imagen']->content;
?>
<div class="small-4 columns">
  <div class="row">
    <div class="small-4 columns imagen">
      <img src="<?php print $image; ?>">
    </div>
    <div class="small-8 columns noticia">
      <p class="llamada"><?php print $llamada; ?></p>
      <p class="titulo"><?php print $title; ?></p>
    </div>
  </div>
</div>