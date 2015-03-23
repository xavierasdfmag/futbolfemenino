<?php 
  global $language;
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 

	// kpr($fields);
	// dpm($fields);
  //die(print_r($fields));
	$title = $fields['title']->content;
	$tag = $fields['field_tag']->content;
  $path_post = $fields['path']->content;
  $image = $fields['field_imagen']->content;
	$share = $fields['sharethis']->content;
  // $count = $fields['counter']->content;  
?>



  
    <div class="small-6 medium-4 columns left">
      <figure>
          <a href="<?php print $path_post; ?>"><img src="<?php print $image; ?>"></a>
      </figure>
      <p class="llamada"><?php print $tag; ?></p>
      <p class="titulo"><?php print $title; ?></p>
      <p><?php print $share; ?></p>
    </div>