<?php session_start(); ?>

<!-- Khoi tao session -->
<?php 
	$_SESSION['name'] = '19PHP03 SDC';
?>

<!-- Su dung session -->
<?php 
	echo $_SESSION['name'];
	$a = "Hello ".$_SESSION['name'];
	echo "<br>";
	echo $a;
?>
