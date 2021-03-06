<?php

$plugin = array(
  'title' => t('Futbol femenino interna template'),
  'theme' => 'futboltheme_interna_template',
  'icon' => 'futboltheme-interna-template.png',
  'category' => 'Futboltheme',
  'regions' => array(
    'publicidad-header' => t('Publicidad Header'),
    'encabezado-header' => t('Encabezado Header'),
    'main-menu' => t('Main Menu'),
    'mega-menu' => t('Mega Menu'),    
    'left-side' => t('Left Side'),
    'right-side' => t('Right Side'),
    'banner-sponsor' => t('Banner Sponsor'),
    'sponsor-news' => t('Sponsor News')
  ),
);

/**
 * Preprocess the site template layout.
 */
// function precision_preprocess_precision_site_template(&$vars) {
//   precision_check_layout_variables($vars);
// }
