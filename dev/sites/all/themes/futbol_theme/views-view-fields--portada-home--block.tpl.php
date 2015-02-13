<?php 
  global $language;
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 

	// kpr($fields);
	// dpm($fields);
	$title = $fields['title']->content;
	$body = $fields['body']->content;
	$image = $fields['field_imagen']->content;
?>

<?php 
  switch ($id) {
    case 1: ?>
      <img src="<?php print $image; ?>">
      <figcaption>
        <div class="row">
          <div class="medium-4 columns portada">
            <p class="tag"><?php print $id; ?></p>
            <p class="title"><?php print $title; ?></p>
          </div>
          <div class="medium-3 columns right tentativas">
      <?php
      break;

    case 4: ?>
            <div class="row">
              <div class="small-12 columns tentativa">
                <p class="tag"><?php print $id; ?></p>
                <p class="title"><?php print $title; ?></p>
              </div>
            </div>
          </div>
        </div>
      </figcaption>
      <?php
      break;
    
    default: ?>
        <div class="row">
          <div class="small-12 columns tentativa">
            <p class="tag"><?php print $id; ?></p>
            <p class="title"><?php print $title; ?></p>
          </div>
        </div>
      <?php
      break;
  }
?>







