<?php 
  global $language;
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 

	kpr($fields);
	dpm($fields);
	$title = $fields['title']->content;
	$tag = $fields['field_tag']->content;
  $path_post = $fields['path']->content;
	$image = $fields['field_imagen']->content;
?>

<div class="small-4 columns">
  <div class="row">
    <div class="small-4 columns imagen">
      <a href="<?php print $path_post; ?>"><img src="<?php print $image; ?>"></a>
    </div>
    <div class="small-8 columns noticia">
      <p class="llamada"><?php print $tag; ?></p>
      <p class="titulo"><?php print $title; ?></p>
    </div>
  </div>
</div>

