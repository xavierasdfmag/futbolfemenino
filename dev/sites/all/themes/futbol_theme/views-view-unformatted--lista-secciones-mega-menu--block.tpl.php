  <div class="contenido-modal">
    <div class="row">
      <div class="small-12 columns">
        <?php $ruta_logo = theme_get_setting('logo', $GLOBALS['theme']); ?>
        <img src="<?php print $ruta_logo; ?>" >
      </div>
    </div>
    <div class="row">
      <div class="small-12 medium-3 columns">
        <h3>Secciones</h3>
        <ul class="menu">
					<?php foreach ($rows as $id => $row): ?>
					  <?php print $row;?>
					<?php endforeach; ?>
        </ul>
<!--         <ul class="menu-institucional">
          <li><a href="#">CORRESPONSAL</a></li>
          <li><a href="#">CONTACTO</a></li>
          <li><a href="#">ANUNCIA</a></li>
          <li><a href="#">MANIFIESTO</a></li>
        </ul> -->
        
      </div>