<?php 
  global $language;
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 

	// kpr($view);
	// die(print_r($view));
	$title = $fields['title']->content;
	$tag = $fields['field_tag']->content;
	$image = $fields['field_imagen']->content;
?>

<?php  $total = count($view->result); ?>
<?php print $total; ?>
<?php foreach ($view->result as $key => $value) : ?>
  <?php if ($key == 0) : ?>
    <img src="<?php print $image; ?>">
    <figcaption>
      <div class="row">
        <div class="medium-4 columns portada">
          <p class="tag"><?php print $tag; ?></p>
          <p class="title"><?php print $title; ?></p>
        </div>
        <div class="medium-3 columns right tentativas"> 
  <?php elseif($key > 0 && $key < $total-1) : ?>
          <div class="row">
            <div class="small-12 columns tentativa">
              <p class="tag"><?php print $tag; ?></p>
              <p class="title"><?php print $title; ?></p>
            </div>
          </div>    
  <?php elseif($key == $total-1) : ?>
        </div>
      </div>
    </figcaption>
  <?php endif ?>
<?php endforeach ?>  









