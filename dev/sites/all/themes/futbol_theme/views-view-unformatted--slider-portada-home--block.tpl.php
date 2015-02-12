<div class="small-12 columns padding-20">
  <ul class="example-orbit-content" data-orbit>
    <li data-orbit-slide="headline-1">
      <div class="row">
				<?php
					for ($x=0;$x<3; $x++)
						print $rows[$x];
				?>
      </div>
    </li>
    <li data-orbit-slide="headline-2">
      <div class="row">
        <?php
          for ($x=3;$x<6; $x++)
            print $rows[$x];
        ?>
      </div>
    </li>
    <li data-orbit-slide="headline-3">
      <div class="row">
        <?php
          for ($x=6;$x<9; $x++)
            print $rows[$x];
        ?>
      </div>
    </li>    
  </ul>  
</div>