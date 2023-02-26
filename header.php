   <?php 
   session_start();
   ?>
   
   <!-- Header -->
   <header>
        <!-- Nav -->
        <div class="nav container2">
            <a href="./index.php" class="logo">Ecommerce</a>
            <?php
if (isset($_SESSION["is_admin"])) {
    echo "<a class='logo' href='./admin.php'>Dashboard</a>";
} 

if (isset($_SESSION["useruid"])) {
    echo "<a class='logo' href='./profile.php'>Profile page</a>";
    echo "<a class='logo' href='./includes/logout.inc.php'>Logout</a>";

} else {
    echo "<a class='logo' href='./aboutUs.php'>About us</a>";
    echo "<a class='logo' href='#'>Contacts</a>";
    echo "<a class='logo' href='./comments.php'>Comments</a>";
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