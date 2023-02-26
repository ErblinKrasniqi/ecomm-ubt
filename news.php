<!DOCTYPE html>
<html>
<head>
	<title>Contact Page</title>
	<link rel="stylesheet" type="text/css" href="./css/news.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
<?php
    include_once("header.php");

    ?>



<div class="container">
	<h1 class='news'>NEWS</h1>
</div>
<?php
    include_once './includes/dbh.inc.php';

    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
		echo "<h1>$row[name]</h1>";
        echo "<p>Lorem ipsum dolor sit amet, $row[name] adipiscing elit. Fusce euismod magna sit $row[name] amet purus gravida tempor. Nullam $row[name] at metus vitae est imperdiet varius. Praesent vel felis non metus bibendum interdum. In vel lacinia magna. Suspendisse potenti. Sed vel tellus et arcu dictum lacinia. Donec euismod pretium ex, ut lobortis mi.</p>";
        echo "<img class='imagec' src='$row[image_path]' alt='placeholder image'>";
		echo "<p>Lorem ipsum dolor sit amet, $row[name] adipiscing elit. Fusce euismod magna sit $row[name] amet purus gravida tempor. Nullam $row[name] at metus vitae est imperdiet varius. Praesent vel felis non metus bibendum interdum. In vel lacinia magna. Suspendisse potenti. Sed vel tellus et arcu dictum lacinia. Donec euismod pretium ex, ut lobortis mi.</p>";
      }
    } else {
      echo '<p>Empty.</p>';
    }
    ?>

</body>
</html>
