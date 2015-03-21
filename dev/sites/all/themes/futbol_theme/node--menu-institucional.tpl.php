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
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <ins class="adsbygoogle"
           style="display:inline-block;width:728px;height:90px"
           data-ad-client="ca-pub-3000094281853126"
           data-ad-slot="9376773571"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>      
    </div>
    <div class="small-12 columns text-center show-for-small-only">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <ins class="adsbygoogle"
           style="display:inline-block;width:300px;height:250px"
           data-ad-client="ca-pub-3000094281853126"
           data-ad-slot="7900040372"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>    
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
