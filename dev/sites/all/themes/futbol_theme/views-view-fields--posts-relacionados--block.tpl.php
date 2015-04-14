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
        
        $view = views_get_view('posts_relacionados_hijos');
        //$view->display_handler->display->display_options['filters']['field_tag_tid']['value'] = $tag;
        // die(print_r($view));
        $view->display_handler->display->display_options['filters']['field_tag_tid']['value'] = array(
          0 => $tag,
        );
        $view->execute();
        print $view->render();


        // $view = views_get_view('view_machine_name');
        // $view->init_display('default');
        // $view->is_cacheable = FALSE;  
        // $view->execute();
        // print $view->render();
      }  
      ?>
    </div>
  </div>


