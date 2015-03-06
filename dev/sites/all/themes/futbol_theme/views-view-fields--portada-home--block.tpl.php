<?php 
  global $language;
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 

	// kpr($fields);
	// die(print_r($view));
	$title = $fields['title']->content;
	$tag = $fields['field_tag']->content;
  $image = $fields['field_imagen']->content;
	$count = $fields['counter']->content;
?>

<?php  $total = count($view->result); ?>

  <?php if ($count == 1) : ?>
    
    <figcaption style="background-image: url('<?php print $image; ?>')">
      <div class="row">
        <div class="medium-4 columns portada">
          <p class="tag"><?php print $tag; ?></p>
          <p class="title"><?php print $title; ?></p>
        </div>
        <div class="medium-3 columns right tentativas"> 
       
  <?php elseif($count > 1 && $count <= $total) : ?>
          <div class="row">
            <div class="small-12 columns tentativa">
              <p class="tag"><?php print $tag; ?></p>
              <p class="title"><?php print $title; ?></p>
            </div>
          </div>  

  <?php elseif($count == $total) : ?>
        </div>
      </div>
    </figcaption>

  <?php endif ?>
  <?php $count++; ?>
  








