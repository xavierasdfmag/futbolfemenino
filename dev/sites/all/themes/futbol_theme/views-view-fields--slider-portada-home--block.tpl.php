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

<?php
  switch ($id) {
    case 1: 
      echo "
      <li data-orbit-slide='headline-1'>
        <div class='row'>
      ";
      break;

    case 4:
      echo "
      <li data-orbit-slide='headline-1'>
        <div class='row'>
      ";
      break;        
  }?
?>

<div class="small-4 columns">
  <div class="row">
    <div class="small-4 columns imagen">
      <img src="<?php print $image; ?>">
    </div>
    <div class="small-8 columns noticia">
      <p class="llamada"><?php print $id; ?></p>
      <p class="titulo"><?php print $title; ?></p>
    </div>
  </div>
</div>

<?php 
  switch ($id) {
    case 3:
      echo "
        </div>
      </li>
      ";
      break;

    case 6:
      echo "
        </div>
      </li>
      ";
      break;          
  }
?>
