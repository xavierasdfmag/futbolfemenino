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
	$texto_corto = $fields['field_texto_corto']->content;
	$image = $fields['field_imagen']->content;
?>

<?php
  switch ($id) {
    case 11: ?>
        <div class="small-12 columns">
          <p class="title-section"><?php print $tag; ?></p>
        </div>
        <div class="small-12 medium-8 columns">
          <h3 class="title-news"><?php print $title; ?></h3>
          <p class="bajada"><?php print $texto_corto; ?></p>
          <img src="<?php print $image; ?>">
          
        </div>
        <div class="small-12 medium-4 columns">
          <ul>
      <?php
      break;

    case 14: ?>
          <li><?php print $title+' '+$id; ?></li>
        </ul>
      </div>
      <?php
      break;      
    
    default: ?>
        <li><?php print $title+' '+$id; ?></li>
      <?php
      break;
  }
?>
