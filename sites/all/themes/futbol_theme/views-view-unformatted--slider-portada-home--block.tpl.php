<?php print render($title_prefix); ?>
<?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
<?php print render($title_suffix); ?>

<div class="small-12 columns padding-20">
  <ul class="example-orbit-content" data-orbit>
    <?php $count = 0; ?>
    <?php foreach ($rows as $id => $row): ?>
			<?php if (fmod($count, 3) == 0) : ?>
			<li data-orbit-slide='headline-1'>
			  <div class='row'>
			<?php endif; ?>  
		      <?php print $row;?>
	    <?php if (fmod($count, 3) == 2) : ?>  
		    </div>
			</li>
			<?php endif; ?> 
			<?php $count++; ?>
    <?php endforeach; ?>
  </ul>  
</div>