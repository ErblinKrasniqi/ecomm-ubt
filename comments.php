<?php
// Include the database connection file
include_once 'includes/dbh.inc.php';

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the input values from the form
  $name = $_POST['name'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];

  // Insert the comment into the database
  $sql = "INSERT INTO comments (name, email, comment) VALUES ('$name', '$email', '$comment')";
  mysqli_query($conn, $sql);
}

// Query the database for comments
$sql = "SELECT * FROM comments";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Leave a comment</title>
  <link rel="stylesheet" href="css/comments.css">
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
    include_once("header.php");

    ?>
  <h1>Conntact</h1>
  <form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="comment">Comment:</label>
    <textarea name="comment" required></textarea><br>

    <input type="submit" name="submit" value="Submit">
  </form>



</body>
</html>

