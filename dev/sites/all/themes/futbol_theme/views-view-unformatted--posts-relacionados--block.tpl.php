<div class="content">
  <?php foreach ($rows as $id => $row): ?>
    <?php print $row;?>
    <?php  
      function futbol_theme_views_pre_view(&$view) {
        if ($view->name == 'posts_relacionados_hijos') {
          kpr($view->display['default']->handler->options['filters']);
          $view->display['default']->handler->options['filters']['province']['value'] = $tag;
        }
      }
      echo views_embed_view('posts_relacionados_hijos', $display_id = 'default');
      ?>
  <?php endforeach; ?>
<!-- </div>
</div> -->
</div>