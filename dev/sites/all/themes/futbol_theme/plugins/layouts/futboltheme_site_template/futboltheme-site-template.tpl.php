<?php

/**
 * @file
 * This layout is designed to be the site template layout when using
 * the Panels Everywhere module.
 */
?>
<div class="row publicidad-header show-for-medium-up">
  <div class="medium-12 medium-centered columns text-center">
    <?php print render($content['publicidad-header']); ?>
  </div>
</div>
<div class="row encabezado-header">
  <?php print render($content['encabezado-header']); ?>
</div>
<div class="row main-menu">
  <?php print render($content['main-menu']); ?>
</div>

<div id="modalMenu" class="reveal-modal" data-reveal>
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
        <div class="row">
          <div class="small-12 medium-5 columns">
            <img src="../img/not-type-one.png">
          </div>
          <div class="small-12 medium-7 columns">
            <p class="tag">SUB 20</p>
            <p class="title">La señorita de la sub 20 entrenan sin descanso en la videna</p>
            <p class="llamada">Entrenantanto que sus papas piensan que están de compras, inefables.</p>
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-5 columns">
            <img src="../img/not-type-one.png">
          </div>
          <div class="small-12 medium-7 columns">
            <p class="tag">SUB 20</p>
            <p class="title">La señorita de la sub 20 entrenan sin descanso en la videna</p>
            <p class="llamada">Entrenantanto que sus papas piensan que están de compras, inefables.</p>
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-5 columns">
            <img src="../img/not-type-one.png">
          </div>
          <div class="small-12 medium-7 columns">
            <p class="tag">SUB 20</p>
            <p class="title">La señorita de la sub 20 entrenan sin descanso en la videna</p>
            <p class="llamada">Entrenantanto que sus papas piensan que están de compras, inefables.</p>
          </div>
        </div>
      </div>
    
    </div>
    <a class="close-reveal-modal">&#215;</a>
  </div>
</div>

<div class="row show-for-large-up">
  <?php print render($content['post-portada']); ?>        
</div>
<div class="row slider-portada show-for-large-up">
  <?php print render($content['slider-portada']); ?>
</div>
<div class="row contenedor">
  <!-- <div class="left-side"> -->
    <div class="small-12 medium-12 large-8 columns sec-left">
      <?php print render($content['left-side']); ?>
    </div>
  <!-- </div> -->
  <!-- <div class="right-side"> -->
    <div class="small-12 medium-12 large-4 columns">
      <?php print render($content['right-side']); ?>
    </div>
  <!-- </div> -->
</div>
<div class="row banner-sponsor">
  <?php print render($content['banner-sponsor']); ?>
</div>
<div class="row sponsor-news">
  <?php print render($content['sponsor-news']); ?>
</div>
