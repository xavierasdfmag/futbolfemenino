<div class="small-12 columns padding-20">
  <ul class="example-orbit-content" data-orbit>
    <li data-orbit-slide="headline-1">
      <div class="row">
			  <?php foreach ($rows as $id => $row): ?>
			    <?php print $row;?>
				<?php endforeach; ?>
      </div>
    </li>
    <li data-orbit-slide="headline-2">
      <div class="row">
				<?php
					for ($x=0;$x<4; $x++)
						print $row[$x];
				?>
      </div>
    </li>

  </ul>  
</div>