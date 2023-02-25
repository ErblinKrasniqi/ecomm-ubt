

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css//login.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php
    include_once("header.php");

    ?>
    <div class="container">
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Log in</button>
        </form>
    </div>
    <?php
    if (isset($_GET["error"])){
        if($_GET["error"] == "eamptyinput"){
            echo "<p>Fill in all fields</p>";
        } 
        else if ($_GET["error"] == "wronglogin"){
            echo "<p>Incorrect login info</p>";
        }

    }

    ?>
</body>
</html>