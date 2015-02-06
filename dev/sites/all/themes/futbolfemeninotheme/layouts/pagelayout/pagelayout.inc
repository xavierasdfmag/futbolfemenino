<?php

/**
 * @file
 * Implementation for the two column bricked layout
 */

// Plugin definition
$plugin = array(
  'title' => t('Layout page'),
  'category' => t('Columns: 2'),
  'icon' => 'pagelayout.png',
  'theme' => 'pagelayout',
  'css' => 'app.css',
  'regions' => array(
    'header_institucional' => t('Header institucional'),
    'header_logo' => t('Header logo'),
    'header_menu' => t('Header menú'),
    'top_portada' => t('Top portada'),
    'top_slider' => t('Top slider'),
    'middle_type_one' => t('Middle type one'),
    'middle_type_two' => t('Middle type two'),
    'middle_type_three' => t('Middle type three'),
    'middle_suscription' => t('Middle suscription'),
    'middle_promo' => t('Middle promo'),
    'banner_sponsor' => t('Banner sponsor'),
    'news_sponsor' => t('News sponsor'),
    'footer' => t('Footer'),
    
    // 'top' => t('Top'),
    // 'left_above' => t('Left above'),
    // 'right_above' => t('Right above'),
    // 'middle' => t('Middle'),
    // 'left_below' => t('Left below'),
    // 'right_below' => t('Right below'),
    // 'bottom' => t('Bottom'),
  ),
);

