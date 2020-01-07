<?php session_start(); ?>
<!-- Su dung session -->
<?php 
	echo $_SESSION['name'];
	$a = "Hello ".$_SESSION['name'];
	echo "<br>";
	echo $a;
?>