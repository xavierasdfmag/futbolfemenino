  <div class="contenido-modal">
    <div class="row">
      <div class="small-12 columns"><img src="../img/logo.png"></div>
    </div>
    <div class="row">
      <div class="small-12 medium-3 columns">
        <h3>Secciones</h3>
					<?php foreach ($rows as $id => $row): ?>
					  <?php print $row;?>
					<?php endforeach; ?>

        <ul class="menu-institucional">
          <li><a href="#">CORRESPONSAL</a></li>
          <li><a href="#">CONTACTO</a></li>
          <li><a href="#">ANUNCIA</a></li>
          <li><a href="#">MANIFIESTO</a></li>
        </ul>
        
      </div>