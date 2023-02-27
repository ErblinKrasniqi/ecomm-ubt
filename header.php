<?php 
session_start(); // start session to enable session variables
?>

<!-- Header -->
<header>
    <!-- Nav -->
    <div class="nav container2">
        <a href="./index.php" class="logo">Ecommerce</a>
        
        <?php
        // check if user is admin, display dashboard link if true
        if (isset($_SESSION["is_admin"])) {
            echo "<a class='logo' href='./admin.php'>Dashboard</a>";
        } 

        // check if user is logged in, display links to pages if true
        if (isset($_SESSION["useruid"])) {
            echo "<a class='logo' href='./aboutUs.php'>About us</a>";
            echo "<a class='logo' href='news.php'>News</a>";
            echo "<a class='logo' href='./comments.php'>Contact</a>";
            echo "<a class='logo' href='./profile.php'>Profile</a>";
            echo "<a class='logo' href='./includes/logout.inc.php'>Logout</a>";
        } 
        // if user is not logged in, display links to login and sign up pages
        else {
            echo "<a class='logo' href='./aboutUs.php'>About us</a>";
            echo "<a class='logo' href='news.php'>News</a>";
            echo "<a class='logo' href='./comments.php'>Contact</a>";
            echo "<a class='logo' href='./login.php'>Profile</a>";
            echo "<a class='logo' href='./login.php'>Log in</a>";
            echo "<a class='logo' href='./signup.php'>Sign up</a>";
        }
        ?>
        
        <!-- Cart-Icon -->
        <i class='bx bx-shopping-bag' id="cart-icon"></i>
        
        <!-- Cart -->
        <div class="cart">
            <h2 class="cart-title">Your Cart</h2>
            
            <!-- Content -->
            <div class="cart-content">
                <!-- cart content goes here -->
            </div>
            
            <!-- Total -->
            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price">$0</div>
            </div>
            
            <!-- Buy Button -->
            <button type="button" class="btn-buy">Buy Now</button>
            
            <!-- Cart Close -->
            <i class='bx bx-x' id="close-cart"></i>
        </div>
    </div>
</header>
