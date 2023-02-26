<?php
// Connect to the database
$db = new mysqli('localhost', 'username', 'password', 'erblin');

// Get the values from the form
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

// Insert the new product into the database
$sql = "INSERT INTO products (name, quantity, price) VALUES ('$name', '$quantity', '$price')";
$result = $db->query($sql);

// Redirect back to the admin page
header('Location: admin.php');
?>
