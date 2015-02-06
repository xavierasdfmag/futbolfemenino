<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width. It is 5 rows high; the top
 * middle and bottom rows contain 1 column, while the second
 * and fourth rows contain 2 columns.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['header_institucional']: 
 *   - $content['header_logo']: 
 *   - $content['header_menu']: 
 *   - $content['top_portada']: 
 *   - $content['top_slider']: 
 *   - $content['middle_type_one']: 
 *   - $content['middle_type_two']: 
 *   - $content['middle_type_three']: 
 *   - $content['middle_suscription']: 
 *   - $content['middle_promo']: 
 *   - $content['banner_sponsor']: 
 *   - $content['news_sponsor']: 
 *   - $content['footer']: 
 *
 */
?>
<div class="row">
  <div class="small-12 columns"><?php print $content['header_institucional']; ?></div>
</div>
<div class="row">
  <div class="small-12 columns"><?php print $content['header_logo']; ?></div>
</div>
<div class="row">
  <div class="small-12 columns"><?php print $content['header_menu']; ?></div>
</div>
<div class="row">
  <div class="small-12 columns"><?php print $content['top_portada']; ?></div>
</div>
<div class="row">
  <div class="small-12 columns"><?php print $content['top_slider']; ?></div>
</div>
<div class="row">
  <div class="small-12 medium-12 large-8 columns">
    <div class="row">
      <div class="small-12 columns"><?php print $content['middle_type_one']; ?></div>
    </div>
    <div class="row">
      <div class="small-12 columns"><?php print $content['middle_type_two']; ?></div>
    </div>
    <div class="row">
      <div class="small-12 columns"><?php print $content['middle_type_three']; ?></div>
    </div>
  </div>

  <div class="small-12 medium-12 large-4 columns">
    <div class="row">
      <div class="small-12 columns"><?php print $content['middle_suscription']; ?></div>
    </div>
    <div class="row">
      <div class="small-12 columns"><?php print $content['middle_promo']; ?></div>
    </div>    
    
  </div>
</div>

<div class="row">
  <div class="small-12 columns"><?php print $content['banner_sponsor']; ?></div>
</div>
<div class="row">
  <div class="small-12 columns"><?php print $content['news_sponsor']; ?></div>
</div>
<div class="row">
  <div class="small-12 columns"><?php print $content['footer']; ?></div>
</div>




