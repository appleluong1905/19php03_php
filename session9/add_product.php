<!DOCTYPE html>
<html>
<head>
	<title>Add product</title>
</head>
<body>
	<?php 
		include 'connect.php';
		// get category
		$sqlCate = "SELECT * FROM product_categories";
		$categories = mysqli_query($connect, $sqlCate);

		// end get category
		if (isset($_POST['add_product'])) {
			$title = $_POST['title'];
			$description = $_POST['description'];
			$image = 'default.png';
			$created = date('Y-m-d');
			$product_category_id = $_POST['product_category_id'];
			if ($_FILES['image']['error'] == 0) {
				$image = $_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$image);
			}
			// luu vao bang products
			$sqlSave = "INSERT INTO products (product_category_id, title, description, image, created) VALUES($product_category_id,'$title', '$description', '$image', '$created')";
			//var_dump($sqlSave);exit();
			if (mysqli_query($connect, $sqlSave) === TRUE) {
				header('Location: list_product.php');
			}
		}
	?>
	<h1>Add product</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
			<p>Title
				<input type="text" name="title">
			</p>
			<p>Description
				<textarea name="description" rows="5" cols="30"></textarea>
			</p>
			<p>Image
				<input type="file" name="image">
			</p>
			<p>Category
			<select name="product_category_id">
				<?php 
						while ($row = $categories->fetch_assoc()) {
							echo "<option value='".$row['id']."'>".$row['name']."</option>";
						}
				?>
			</select>
			</p>
			<p>
				<input type="submit" name="add_product">
			</p>
	</form>
</body>
</html>