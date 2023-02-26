<?php

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    // Retrieve the user from the database
    $sql = "SELECT * FROM users WHERE usersUid=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../login.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
        // Check if the password is correct
        $pwdHashed = $row["usersPwd"];
        $pwdCheck = password_verify($pwd, $pwdHashed);
        if ($pwdCheck === false) {
            header("location: ../login.php?error=wronglogin");
            exit();
        } else if ($pwdCheck === true) {
            // Check if the user is an admin
            if ($row["is_admin"] === 1) {
                header('Location: ../admin.php');
                exit();
            } else {
                // Log in the user
                session_start();
                $_SESSION["userid"] = $row["usersId"];
                $_SESSION["useruid"] = $row["usersUid"];
                header("location: ../index.php");
                exit();
            }
        }
    } else {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
} else {
    header("location: ../login.php");
    exit();
}
