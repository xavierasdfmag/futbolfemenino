<?php

/**
 * @file
 * This layout is designed to be the site template layout when using
 * the Panels Everywhere module.
 */
?>
<div<?php print $css_id ? " id=\"$css_id\"" : ''; ?> class="page-wrapper">

  <?php if (!empty($content['branding'])): ?>
    <div class="page-branding-wrapper">
      <div class="region container-48 clearfix">
        <div class="page-branding grid-48">
          <div class="page-branding-inner clearfix">
            <?php print render($content['branding']); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['nav'])): ?>
    <div class="page-nav-wrapper">
      <div class="region container-48 clearfix">
        <div class="page-nav grid-48">
          <div class="page-nav-inner clearfix">
            <?php print render($content['nav']); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['main'])): ?>
    <div class="page-body-wrapper">
      <div class="region container-48 clearfix">
        <div class="page-body grid-48">
          <div class="page-body-inner clearfix">
            <?php print render($content['main']); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['footer'])): ?>
    <div class="page-closure-wrapper">
      <div class="region container-48 clearfix">
        <div class="page-closure grid-48">
          <div class="page-closure-inner clearfix">
            <?php print render($content['footer']); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

</div>

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
  <div class="row show-for-large-up">
    <?php print render($content['post-portada']); ?>        
  </div>
  <div class="row slider-portada show-for-large-up">
    <?php print render($content['slider-portada']); ?>
  </div>
  <div class="row contenedor">
    <div class="left-side">
      <div class="small-12 medium-12 large-8 columns sec-left">
        <?php print render($content['left-side']); ?>
      </div>
    </div>
    <div class="right-side">
      <div class="small-12 medium-12 large-4 columns">
        <?php print render($content['right-side']); ?>
      </div>
    </div>
  </div>
  <div class="row banner-sponsor">
    <?php print render($content['banner-sponsor']); ?>
  </div>
  <div class="row sponsor-news">
    <?php print render($content['sponsor-news']); ?>
  </div>
