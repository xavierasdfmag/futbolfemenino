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
  $share = $fields['sharethis']->content;
?>


  <div class="small-12 columns">
    <p class="title-section"><?php print $tag; ?></p>
  </div>      
  <div class="small-12 columns">
    <img src="<?php print $image; ?>">
  </div>
  <div class="small-12 columns show-for-small-only">
    <div class="sociales-type-two text-right">
      <?php print $share; ?>
    </div>      
  </div>    
  <div class="small-12 medium-7 columns">
    <h3 class="title-news"><?php print $title; ?></h3>
  </div>
  <div class="small-12 medium-5 columns">
    <p class="bajada"><?php print $llamada; ?></p>
  </div>
  <div class="small-12 columns hide-for-small-only">
    <div class="sociales-type-two text-right">
      <?php print $share; ?>
    </div>      
  </div>  

