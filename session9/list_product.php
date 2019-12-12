<!DOCTYPE html>
<html>
<head>
	<title>List product</title>
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>
<?php 
	include 'connect.php';
	$sqlSelect = "SELECT * FROM products";
	// Thuc hien chuc nang tim kiem
	$keyword = '';
	if (isset($_POST['search'])) {
		$keyword = $_POST['keyword'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		// search keyword
		if ($keyword != '') {
			$sqlSelect = "SELECT * FROM products WHERE title LIKE '%$keyword%' OR description LIKE '%$keyword%'";
		}
	}

	$result = mysqli_query($connect, $sqlSelect);

?>
	<h1>List product</h1>
	<form action="#" method="POST" name="search-product">
		<p>
			Keywords
			<input type="text" name="keyword" value="<?php echo $keyword;?>">
		</p>
		<p>
			Start date
			<input type="date" name="start">
		</p>
		<p>
			End date
			<input type="date" name="end">
		</p>
		<p>
			<input type="submit" name="search">
		</p>
	</form>
	<table>
		<tr>
			<th>No.</th>
			<th>Title</th>
			<th>Description</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
		<?php 
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['title']."</td>";
				echo "<td>".$row['description']."</td>";
				echo "<td><img src='uploads/".$row['image']."'></td>";
				echo "<td><a href='delete.php?id=".$id."''>Delete</a> | <a href='edit.php?id=".$id."''>Edit</a></td>";
				echo "</tr>";
			}
		?>
	</table>

</body>
</html>