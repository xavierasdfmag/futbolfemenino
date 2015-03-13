<?php 
  global $base_url;
  global $theme_path;
  global $language;
  $path = $base_url.'/'.$theme_path;
  $pathfile = variable_get('file_public_path', conf_path() . '/files/');

  $titulo = $node->title;
  $cuerpo = $node->body['und']['0']['value'];
  $fids   = $node->field_items_principal['und'];
  // print_r($fids);
  // kpr($node);
  // dpm($node);

  
?>

      <div class="top-bar-container contain-to-grid sticky" role="navigation">
        <nav class="top-bar" data-topbar role="navigation">
          <ul class="title-area">
          <?php foreach ($fids as $fid) : ?>
          <?php 
            // print_r($fid['value']);
            $num = $fid['value'];
            $field = entity_load('field_collection_item', array($fid['value']));
            $nombre = $field[$num]->field_titulo_principal['und'][0]['value'];
            $link = $field[$num]->field_link_principal['und'][0]['value'];
            if ( $nombre == 'Home') {
              ?>
              <li class="name">
                <a href="/dev/<?php print $link ?>"><span class="icon-home"></span></a>
              </li>
              <?php
            }
          ?>
          <?php endforeach; ?>  
             <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
          </ul>

          <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
              <li><a href="#" data-reveal-id="modalMenu">VER TODO <span class="icon-menu"></a></li>
            </ul>
      <ul class="left">
        <?php foreach ($fids as $fid) : ?>
          <?php 
            // print_r($fid['value']);
            $num = $fid['value'];
            $field = entity_load('field_collection_item', array($fid['value']));
            $nombre = $field[$num]->field_titulo_principal['und'][0]['value'];
            if ( ($nombre == 'Home') or ($nombre == 'Ver todo')) {
              continue;
            }
            $link = $field[$num]->field_link_principal['und'][0]['value'];
          ?>
            <?php 
              $path = current_path(); 
              $partes = split ("\/", $path);
              $seccion_actual = $partes[1];
              if ($link == $seccion_actual) {
                $class_li = 'active';
              }else{
                $class_li = ' ';
              }
            ?>
          <li class="<?php print $class_li; ?>">
            <a href='/dev/<?php print $link ?>'><?php print $nombre ?></a>
          </li>
        <?php endforeach; ?>  
      </ul>
          </section>
        </nav>
      </div>





