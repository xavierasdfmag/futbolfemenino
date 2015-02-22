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
  
?>

      <div class="top-bar-container contain-to-grid sticky" role="navigation">
        <nav class="top-bar" data-topbar role="navigation">
          <ul class="title-area">
            <li class="name">
              <span class="icon-home"></span>
              <!-- <h1><a href="#">My Site</a></h1> -->
            </li>
             <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
          </ul>

          <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
              <li><a href="#" data-reveal-id="modalMenu">VER TODO <span class="icon-menu"></a></li>
            </ul>

            <!-- Left Nav Section -->
<!--             <ul class="left">
              <li><a href="#">TENDENCIA</a></li>
              <li><a href="#">LOCALES</a></li>
              <li><a href="#">MUNDO</a></li>
              <li class="has-dropdown">
                <a href="#">FUNDAMENTOS</a>
                <ul class="dropdown">
                  <li><a href="#">First link in dropdown</a></li>
                  <li class="active"><a href="#">Active link in dropdown</a></li>
                </ul>
              </li>
              <li><a href="#">LA AGENDA</a></li>
              <li><a href="#">LOS TOPS</a></li>
              <li class="has-dropdown">
                <a href="#">REVISTA</a>
                <ul class="dropdown">
                  <li><a href="#">First link in dropdown</a></li>
                  <li class="active"><a href="#">Active link in dropdown</a></li>
                </ul>
              </li>
            </ul> -->
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
          <li>
            <a href='/dev/<?php print $link ?>'><?php print $nombre ?></a>
          </li>
        <?php endforeach; ?>  
      </ul>
          </section>
        </nav>
      </div>





