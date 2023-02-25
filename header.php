   <?php 
   session_start();
   ?>
   
   <!-- Header -->
   <header>
        <!-- Nav -->
        <div class="nav container">
            <a href="./index.php" class="logo">Ecommerce</a>
            <?php
            if(isset($_SESSION["useruid"])){
                echo " <a href='./profile.php'>Profile page</a>";
                echo "<a href='./includes/logout.inc.php'>logout</a>";
                
            } else {
                echo " <a href='./login.php'>Log in</a>";
                echo "<a href='./signup.php'>Sign up</a>";
                
            }
            
            ?>
            
            <a href='./admin.php'>Log admin</a>
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