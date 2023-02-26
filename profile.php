<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: login.php");
    exit();
}

require_once 'includes/dbh.inc.php';

$userId = $_SESSION['userid'];

$sql = "SELECT * FROM profiles WHERE user_id=?;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=stmtfailed");
    exit();
}
mysqli_stmt_bind_param($stmt, "i", $userId);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    $description = $row['description'];
} else {
    $name = '';
    $description = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include_once("header.php"); ?>
<div class="container">
    <h1>Welcome, <?php echo $_SESSION['useruid']; ?></h1>
    <h2><?php echo $name; ?></h2>
    <p><?php echo $description; ?></p>
</div>
</body>
</html>
