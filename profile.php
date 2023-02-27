<?php
// Include the header file and the database connection file
include_once("header.php");
include_once("./includes/dbh.inc.php");

// Check if the user is logged in
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["userid"])) {
    header("location: login.php");
    exit();
}

// Retrieve the user's information from the database
$sql = "SELECT * FROM users WHERE usersId=?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    // If there's an error preparing the statement, redirect to index with an error message
    header("location: index.php?error=stmtfailed");
    exit();
}
mysqli_stmt_bind_param($stmt, "i", $_SESSION["userid"]);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

// Check if the user submitted the form to update their name
if (isset($_POST["update-name"])) {
    // Get the new name from the form
    $newName = $_POST["name"];
    // Update the user's name in the database
    $sql = "UPDATE users SET usersName=? WHERE usersId=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        // If there's an error preparing the statement, redirect to profile with an error message
        header("location: profile.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "si", $newName, $_SESSION["userid"]);
    mysqli_stmt_execute($stmt);
    // Redirect to profile with a success message
    header("location: profile.php?success=nameupdated");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <div class="container1">
        <h1>Profile</h1>
        <p>Welcome, <?php echo $row["usersName"]; ?></p>
        <!-- Display a form to update the user's name -->
        <form action="profile.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $row["usersName"]; ?>">
            <button type="submit" name="update-name">Update Name</button>
        </form>
    </div>
</body>
</html>
