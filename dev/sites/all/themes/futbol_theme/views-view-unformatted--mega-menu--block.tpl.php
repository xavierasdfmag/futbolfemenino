  <div class="contenido-modal">
    <div class="row">
      <div class="small-12 columns"><img src="../img/logo.png"></div>
    </div>
    <div class="row">
      <div class="small-12 medium-3 columns">
        <h3>Secciones</h3>
        <ul class="menu">
          <li><a href="#">TENDENCIA</a></li>
          <li><a href="#">LOCALES</a></li>
          <li><a href="#">MUNDO</a></li>
          <li><a href="#">FUNDAMENTOS</a></li>
          <li><a href="#">LA AGENDA</a></li>
          <li><a href="#">LOS TOPS</a></li>
          <li><a href="#">REVISTA</a></li>
        </ul>
        <ul class="menu-institucional">
          <li><a href="#">CORRESPONSAL</a></li>
          <li><a href="#">CONTACTO</a></li>
          <li><a href="#">ANUNCIA</a></li>
          <li><a href="#">MANIFIESTO</a></li>
        </ul>
        
      </div>
      <div class="small-12 medium-9 columns">
        <h3>Features</h3>
          <?php foreach ($rows as $id => $row): ?>
          <?php print $row;?>
      </div> 
    </div>
    <a class="close-reveal-modal">&#215;</a>
  </div>