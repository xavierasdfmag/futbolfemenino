<div class="row seccion-type-one">
  <?php foreach ($rows as $id => $row): ?>
    <?php print $row;?>
  <?php endforeach; ?>
</div>
	<div class="row">
		<div class="small-12 columns">
			<?php kpr($rows[0]); ?>
			<?php dpm($rows[0]); ?>
		</div>
		
	</div>
</div>