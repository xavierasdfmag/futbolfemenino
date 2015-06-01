<?php 
  global $base_url;
  global $theme_path;
  global $language;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

  $titulo = $node->title;
  $cuerpo = $node->body['und']['0']['value'];
  $fids   = $node->field_items_constitucional['und'];
  // print_r($fids);
  
?>
    <div class="small-12 columns text-center hide-for-small-only">
     
    </div>
    <div class="small-12 columns text-center show-for-small-only">
  
    </div>    

    <div class="small-12 columns menu-institucional">
      <ul class="inline-list left">
        <?php foreach ($fids as $fid) : ?>
          <?php 
            // print_r($fid['value']);
            $num = $fid['value'];
            $field = entity_load('field_collection_item', array($fid['value']));
            $nombre = $field[$num]->field_titulo_institucional['und'][0]['value'];
            $link = $field[$num]->field_link_institucional['und'][0]['value'];
          ?>
          <li>
            <a href='<?php print $link; ?>'><?php print $nombre; ?></a>
          </li>
        <?php endforeach; ?>  
      </ul>
