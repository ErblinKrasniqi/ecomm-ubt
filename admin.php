<?php
include_once './includes/dbh.inc.php';

// check if user clicked the delete button
if (isset($_POST['delete'])) {
  $id = $_POST['delete'];
  $sql = "DELETE FROM users WHERE usersId=$id";
  mysqli_query($conn, $sql);
  header("Refresh:0");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <style>


        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 200px;
        }


   
    </style>
</head>
<body>



<?php
include_once './includes/dbh.inc.php';

if (isset($_POST['submit'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $price = mysqli_real_escape_string($conn, $_POST['price']);

  // Handle image upload
  $targetDir = "uploads/";
  $targetFile = $targetDir . basename($_FILES["image"]["name"]);
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
  $uploadOk = 1;
  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  } else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
      $imagePath = $targetFile;
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

  // Store product information and image path in database
  $sql = "INSERT INTO products (name, price, image_path) VALUES ('$name', '$price', '$imagePath')";
  mysqli_query($conn, $sql);



}
?>

<?php
include_once("header.php");

?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM users;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['usersId'] . "</td>";
                echo "<td>" . $row['usersUid'] . "</td>";
                echo "<td>" . $row['usersEmail'] . "</td>";
                echo "<td>" . $row['usersName'] . "</td>";
                echo "<td>
                                <form method='POST' action=''>
                                    <button type='submit' name='delete' value='" . $row['usersId'] . "'>Delete</button>
                                </form>
                              </td>";
                echo "</tr>";
              }
            }


            ?>

            


            
        </tbody>
    </table>
    <h2>Add Product</h2>
<form class='add-product-form' method="post" action="" enctype="multipart/form-data">
  <label for="name">Product Name:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="price">Price:</label>
  <input type="text" id="price" name="price"><br><br>
  <label for="image">Image:</label>
  <input type="file" id="image" name="image"><br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<h2 class="comments">Contacts Section</h2>
  <?php
  include_once './includes/dbh.inc.php';

  $sql = "SELECT * FROM comments";
  $result = mysqli_query($conn, $sql);


  // Display the comments on the web page
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

      echo "<div class='comments'>";
      echo "<h3>" . $row["name"] . " <small>(" . $row["email"] . ")</small></h3>";
      echo "<p>" . $row["comment"] . "</p>";
      echo "<div'>";
    }
  } else {
    echo "<p>No comments yet.</p>";
  }
  ?>

  

</body>
</html>
