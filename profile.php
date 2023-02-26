<?php


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
    header("location: index.php?error=stmtfailed");
    exit();
}
mysqli_stmt_bind_param($stmt, "i", $_SESSION["userid"]);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

// Check if the user submitted the form to update their name
if (isset($_POST["update-name"])) {
    $newName = $_POST["name"];
    $sql = "UPDATE users SET usersName=? WHERE usersId=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: profile.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "si", $newName, $_SESSION["userid"]);
    mysqli_stmt_execute($stmt);
    header("location: profile.php?success=nameupdated");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        /* Style for the container */
        .container1 {
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
            padding-top: 50px;
        }

    /* Style for the heading */
    h1 {
        font-size: 2rem;
        margin-top: 20px;
        margin-bottom: 30px;
    }

    /* Style for the form */
    form {
        display: inline-block;
        margin-top: 30px;
    }

    /* Style for the input and button */
    input[type="text"],
    button {
        padding: 10px;
        font-size: 1.2rem;
        border: none;
        border-radius: 5px;
        margin-right: 10px;
    }

    /* Style for the button */
    button {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Hover style for the button */
    button:hover {
        background-color: #3e8e41;
    }
</style>
</head>
<body>
    <div class="container1">
        <h1>Profile</h1>
        <p>Welcome, <?php echo $row["usersName"]; ?></p>
        <form action="profile.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $row["usersName"]; ?>">
            <button type="submit" name="update-name">Update Name</button>
        </form>
    </div>
</body>
</html> 