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
<div class="">

      <?php print render($content['left-side']); ?>
  <!-- Cerrando la parte izquierda-->
  </div>
  <!-- Cerrando la parte izquierda-->

    <div class="small-12 medium-12 large-4 columns">
      <?php print render($content['right-side']); ?>

</div>
<div class="row banner-sponsor">
  <?php print render($content['banner-sponsor']); ?>
</div>
<div class="row sponsor-news">
  <?php print render($content['sponsor-news']); ?>
</div>
