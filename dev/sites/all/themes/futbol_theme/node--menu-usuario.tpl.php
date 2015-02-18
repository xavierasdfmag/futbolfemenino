<?php 
  global $base_url;
  global $theme_path;
  global $language;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

  $titulo = $node->title;
  $cuerpo = $node->body['und']['0']['value'];
  $fids   = $node->field_items_usuario['und'];
  // print_r($fids);
  
?>

      <ul class="inline-list right">
        <?php foreach ($fids as $fid) : ?>
          <?php 
            // print_r($fid['value']);
            $num = $fid['value'];
            $field = entity_load('field_collection_item', array($fid['value']));
            $nombre = $field[$num]->field_titulo_usuario['und'][0]['value'];
            $link = $field[$num]->field_link_usuario['und'][0]['value'];
            switch ($nombre) {
              case 'Ingresa':
                $icon = '<span class="icon-user"></span>';
                break;
              case 'Suscribete':
                $icon = '<span class="icon-user-plus"></span>';
                break;
              case 'Busca':
                $icon = '<span class="icon-search"></span>';
                break;                                
              default:
                $icon = '<span class=""></span>';
                break;
            }            
          ?>
          <li>
            <a href='<?php print $link ?>'><?php print $icon; ?><?php print $nombre ?></a>
          </li>
        <?php endforeach; ?>  
      </ul>
      </div>
    <div class="small-12 columns logo">
      <img src="../img/logo.png">
    </div>      

  <?php print $cuerpo ?>