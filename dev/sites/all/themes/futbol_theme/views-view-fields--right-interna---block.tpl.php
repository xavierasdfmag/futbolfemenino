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
	$image = $fields['field_imagen']->content;
?>

<div class="small-6 medium-4 large-12 columns">
  <figure>
      <img src="<?php print $image; ?>">
    <figcaption>
    </figcaption>
  </figure>       
  <p class="llamada"><?php print $tag; ?></p>
  <p class="title"><?php print $title; ?></p>
</div>