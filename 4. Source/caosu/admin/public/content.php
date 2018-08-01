<?php require_once("head.php"); ?>
<div class="all-wrapper">
        <div class="row">
            <?php require_once("header.php"); ?>
           	<?php
				if(isset($view))
					require_once($view); 
			?>
        </div>
    </div>
    <?php 
		if(isset($footer)) 
			require_once($footer);
	?>   
</body>
</html>