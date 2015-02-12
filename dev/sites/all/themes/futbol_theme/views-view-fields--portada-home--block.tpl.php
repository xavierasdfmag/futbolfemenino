<?php 
  global $language;
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 

	kpr($fields);
	$title = $fields['title']->content;
	$body = $fields['body']->content;
	$image = $fields['field_imagen']->content;
?>
<img src="<?php print $image ?>">
<figcaption>
  <div class="row">
    <div class="medium-4 columns portada">
      <p class="tag">BALON DE ORO</p>
      <p class="title"><?php print $title ?></p>
    </div>
  </div>
</figcaption>