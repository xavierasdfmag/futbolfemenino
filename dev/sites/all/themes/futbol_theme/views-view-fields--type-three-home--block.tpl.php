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
  $count = $fields['counter']->content;
  $share = $fields['sharethis']->content;
?>
<?php  $total = count($view->result); ?>

  <?php if ($count == 1) : ?>
    <div class="small-12 columns">
      <p class="title-section"><?php print $tag; ?></p>
    </div>        
    <div class="small-8 left columns">
      <img src="<?php print $image; ?>">  
      <div class="sociales-type-three show-for-small-only text-right">
        <?php print $share; ?>
      </div>      
    </div>  
    <div class="small-4 right columns">
      <h3 class="title-news"><?php print $title; ?></h3>
      <p class="bajada"><?php print $llamada; ?></p>

    </div>
    <div class="small-12 columns hide-for-small-only">
      <div class="sociales-type-three text-right">
        <?php print $share; ?>
      </div>      
    </div>

    <div class="small-8 left columns">
      <div class="row">
  <?php elseif($count > 1 && $count <= $total) : ?>
        <div class="small-6 columns">
          <ul>
            <li>
              <a href="#"><?php print $title; ?></a>
            </li>
          </ul>
        </div>
  <?php elseif($count == $total) : ?>

      </div>
    </div>   

  <?php endif ?>
  <?php $count++; ?>


