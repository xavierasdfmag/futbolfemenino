
    <?php $count = 0; ?>
    <?php foreach ($rows as $id => $row): ?>
			<?php if (fmod($count, 3) == 0) : ?>
			  <div class='row'>
			<?php endif; ?>  

<?php //foreach ($rows as $id => $row): ?>
  <?php print $row;?>
<?php //endforeach; ?>

	    <?php if (fmod($count, 3) == 2) : ?>  
		    </div>
			<?php endif; ?> 
			<?php $count++; ?>
    <?php endforeach; ?>