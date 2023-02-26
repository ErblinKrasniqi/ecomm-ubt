<?php
session_start();
if (!isset($_SESSION['userid'])) {
  header("Location: login.php");
  exit();
}

require_once './includes/dbh.inc.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $description = $_POST['description'];
  $user_id = $_SESSION['userid'];

  $sql = "UPDATE profiles SET name=?, description=? WHERE user_id=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: profile.php?error=stmtfailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "ssi", $name, $description, $user_id);
  mysqli_stmt_execute($stmt);

  header("Location: profile.php");
  exit();
}
?>
