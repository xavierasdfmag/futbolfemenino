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

  <div class="row">
    <div class="small-12 medium-5 columns">
      <img src="<?php print $image; ?>">
    </div>
    <div class="small-12 medium-7 columns">
      <p class="tag"><?php print $tag; ?></p>
      <p class="title"><?php print $title; ?></p>
      <p class="llamada"><?php print $llamada; ?></p>
    </div>
  </div>

