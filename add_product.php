<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
	<h1>Add Product</h1>
	<form method="post" action="process_product.php">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>
		<br>
		<label for="quantity">Quantity:</label>
		<input type="number" id="quantity" name="quantity" required>
		<br>
		<label for="price">Price:</label>
		<input type="number" id="price" name="price" step="0.01" required>
		<br>
		<input type="submit" value="Add Product">
	</form>
</body>
</html>
