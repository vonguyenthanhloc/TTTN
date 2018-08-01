<?php include("head.php"); ?>
<?php include("header.php"); ?>

<div id="content">

<?php 
	if(isset($view))
		include ($view);
?>

<?php include("footer.php"); ?>

</div>
