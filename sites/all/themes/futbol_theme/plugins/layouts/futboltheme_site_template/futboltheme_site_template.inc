<?php

$plugin = array(
  'title' => t('Futbol femenino site template'),
  'theme' => 'futboltheme_site_template',
  'icon' => 'futboltheme-site-template.png',
  'category' => 'Futboltheme',
  'regions' => array(
    'publicidad-header' => t('Publicidad Header'),
    'encabezado-header' => t('Encabezado Header'),
    'main-menu' => t('Main Menu'),
    'mega-menu' => t('Mega Menu'),
    'post-portada' => t('Post Portada'),
    'slider-portada' => t('Slider Portada'),
    'left-side' => t('Left Side'),
    'right-side' => t('Right Side'),
    'banner-sponsor' => t('Banner Sponsor'),
    'sponsor-news' => t('Sponsor News'),
    'left-side-scroll' => t('Left Side Scroll'),
    'right-side-scroll' => t('Right Side Scroll')    
  ),
);

/**
 * Preprocess the site template layout.
 */
// function precision_preprocess_precision_site_template(&$vars) {
//   precision_check_layout_variables($vars);
// }
