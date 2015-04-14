<?php 
  global $language;
  global $base_url;
  global $theme_path;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/'); 

	// kpr($fields);
	// dpm($fields);
  $title = $fields['title']->content;
  $views = $fields['view']->content;
  $tag = $fields['field_tag']->content;
  $llamada = $fields['field_llamada']->content;
  $image = $fields['field_imagen']->content;
  $count = $fields['counter']->content;
  $share = $fields['sharethis']->content;
  $path_post = $fields['path']->content;
?>
<?php  //$total = count($view->result); ?>

  <?php //if ($count == 1) : ?>
  <div class="row seccion-type-one">  
    <div class="small-12 columns">
      <p class="title-section"><?php print $tag; ?></p>
    </div>
    <div class="small-12 medium-8 columns">
      <h3 class="title-news"><?php print $title; ?></h3>
      <p class="bajada"><?php print $llamada; ?></p>
      <a href="<?php print $path_post; ?>"><img src="<?php print $image; ?>"></a>
      <div class="sociales-type-one text-right">
        <?php print $share; ?>
      </div>
    </div>
    <div class="small-12 medium-4 columns">
      <?php
      if ($tag != '') {
        print('hola');
        $view = views_get_view('posts_relacionados_hijos');
        // print_r($view);`
        $view->execute();
        print_r($view->result);
      }  
      ?>
    </div>
  </div>


