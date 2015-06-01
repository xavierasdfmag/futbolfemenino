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
  <?php print render($content['mega-menu']); ?>
</div>
<div class="show-for-medium-up row">
  <?php print render($content['post-portada']); ?>        
</div>
<div class="row slider-portada show-for-large-up">
  <?php print render($content['slider-portada']); ?>
</div>
<div class="row contenedor">
  <div class="small-12 medium-12 large-8 columns sec-left">
    <!-- <div class="recursivo"> -->
      <?php print render($content['left-side']); ?>
    <!-- </div> -->
  </div>
  <div class="small-12 medium-12 large-4 columns sec-right text-right">
    <?php print render($content['right-side']); ?>
  </div>
</div>
<div class="row sponsor-banner">
  <?php print render($content['banner-sponsor']); ?>
</div>
<div class="row sponsor-news">
  <?php print render($content['sponsor-news']); ?>
</div>
<div class="row contenedor">
  <div class="small-12 medium-12 large-8 columns sec-left">
    <div class="recursivo">
      <!-- <div class="container-type-one content"> -->
        <?php print render($content['left-side-scroll']); ?>
      <!-- </div> -->
    </div>
  </div>
  <div class="small-12 medium-12 large-4 columns sec-right">
    <?php print render($content['right-side-scroll']); ?>
  </div>
</div>
