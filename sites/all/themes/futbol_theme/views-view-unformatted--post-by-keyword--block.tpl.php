<div class="row">
  <div class="small-12 large-8 columns sec-left">
  	<?php if(!empty($rows)): ?>
		<?php foreach ($rows as $id => $row): ?>
		  <?php print $row; ?>
		<?php endforeach; ?>
	<?php else: ?>
		<?php print $empty; ?>
	<?php endif; ?>

