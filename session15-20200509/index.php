<!DOCTYPE html>
<html>
<head>
	<title>Example</title>
</head>
<body>
	<?php include 'controller/controller.php';?>
	<ul>
		<li><a href="index.php?action=news">News</a></li>
		<li><a href="index.php?action=products">Product</a></li>
		<li><a href="index.php?action=login">Login</a></li>
	</ul>
	<?php 
		$controller = new Controller();
		$controller->handleRequest();
	?>
</body>
</html>