<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php
    include_once("header.php");

    ?>
    
    <div class="container">
        <form action="./includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Repeat pssword">
            <button type="submit" name="submit">Sign up</button>
        </form>
    </div>

    <?php
    if (isset($_GET["error"])){
        if($_GET["error"] == "eamptyinput"){
            echo "<p>Fill in all fields</p>";
        } 
        else if ($_GET["error"] == "invalidUid"){
            echo "<p>Chose a proper username</p>";
        }
        else if ($_GET["error"] == "invalidemail"){
            echo "<p>Chose a proper email</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch"){
            echo "<p>Passwords dont match</p>";
        }
        else if ($_GET["error"] == "stmtfailed"){
            echo "<p>Somthing went wrong try again</p>";
        }
        else if ($_GET["error"] == "usernametaken"){
            echo "<p>Username already taken</p>";
        }
        else if ($_GET["error"] == "none"){
            echo "<p>You have signd up</p>";
        }
    }

    ?>

</body>
</html>
