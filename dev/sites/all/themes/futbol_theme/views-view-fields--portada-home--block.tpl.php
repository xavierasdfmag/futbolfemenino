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
<?php  $first = reset($view->result); ?>
<?php print $total; ?>
<?php $count = 0; ?>

  <?php if ($count == 0) : ?>
    <img src="<?php print $image; ?>">
    <figcaption>
      <div class="row">
        <div class="medium-4 columns portada">
          <p class="tag"><?php print $tag; ?></p>
          <p class="title"><?php print $title; ?></p>
        </div>
        <div class="medium-3 columns right tentativas"> 
       
  <?php elseif($count > 0 && $count < $total-1) : ?>
          <div class="row">
            <div class="small-12 columns tentativa">
              <p class="tag"><?php print $tag; ?></p>
              <p class="title"><?php print $title; ?></p>
            </div>
          </div>  

  <?php elseif($count == $total-1) : ?>
        </div>
      </div>
    </figcaption>

  <?php endif ?>
  <?php $count++; ?>
  








