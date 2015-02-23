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
?>
<?php  $total = count($view->result); ?>

  <?php if ($count == 1) : ?>
    <div class="small-12 columns">
      <p class="title-section"><?php print $tag; ?></p>
    </div>
    <div class="small-12 medium-8 columns">
      <h3 class="title-news"><?php print $title; ?></h3>
      <p class="bajada"><?php print $llamada; ?></p>
      <img src="<?php print $image; ?>">
      
    </div>
    <div class="small-12 medium-4 columns">
      <ul>
  <?php elseif($count > 1 && $count <= $total) : ?>
        <li><a href="#"><?php print $title; ?></a></li>
  <?php elseif($count == $total) : ?>
      </ul>
    </div>


  <?php endif ?>
  <?php $count++; ?>
