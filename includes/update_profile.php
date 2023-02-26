<?php
if (isset($_POST["update-name"])) {
    require_once 'dbh.inc.php';
    session_start();
    $newName = $_POST["name"];
    $sql = "UPDATE users SET usersName=? WHERE usersId=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../profile.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "si", $newName, $_SESSION["userid"]);
    mysqli_stmt_execute($stmt);
    header("location: ../profile.php?success=nameupdated");
    exit();
} else {
    header("location: ../profile.php");
    exit();
}
