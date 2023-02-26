<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="css/about.css">
<?php
    include_once("header.php");

    ?>


<main class="container">
  <h2>About Us</h2>
  <?php
    include_once './includes/dbh.inc.php';

    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);

        
        echo "<img class='imagec' src='$row[image_path]' alt='placeholder image'>";
		
      
    } else {
      echo '<p>Empty.</p>';
    }
    ?>


  <p>Our Watches is a company that specializes in selling high-quality watches. We have a wide selection of watches that cater to different styles and preferences. Our watches are made with the finest materials and are designed to last for years.</p>
  <p>Our company was founded in 2005 with the goal of providing our customers with the best watches at affordable prices. We believe that everyone should be able to own a high-quality watch without breaking the bank.</p>
  <h3>Company History</h3>
  <p>Since our founding, we have been committed to providing the highest quality watches to our customers. We have worked hard to build relationships with some of the most respected watch companies in the world, including:</p>
  <ul>
    <li><strong>Rolex:</strong> A world-renowned brand known for its precision and luxury. Our Watches is proud to be an authorized dealer of Rolex watches, and we offer a wide selection of models to suit any taste.</li>
    <li><strong>Seiko:</strong> A Japanese company that has been producing watches for over a century. Seiko is known for its innovative technology and stylish designs, and we are pleased to offer a range of Seiko watches in our collection.</li>
    <li><strong>Omega:</strong> A Swiss luxury watchmaker that has been in operation since 1848. Omega is famous for its precision and durability, and we are thrilled to be able to offer a selection of Omega watches to our customers.</li>
    <li><strong>Breitling:</strong> A Swiss luxury watch brand that specializes in aviation watches. Breitling is known for its precision and reliability, and we are excited to offer a range of Breitling watches in our collection.</li>
  </ul>
  <h3>Watch Collections</h3>
  <p>At Our Watches, we offer a range of collections to suit different styles and preferences. Some of our most popular collections include:</p>
  <ul>
    <li><strong>The Classic Collection:</strong> Featuring traditional styles and elegant designs, the Classic Collection is perfect for those who prefer a timeless look.</li>
    <li><strong>The Sports Collection:</strong> Designed for the active lifestyle, the Sports Collection features rugged materials and features like chronographs and water resistance.</li>
    <li><strong>The Luxury Collection:</strong> For those who want the ultimate in style and sophistication,</li>
</ul>