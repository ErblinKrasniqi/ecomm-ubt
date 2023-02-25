<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website - Shopping Cart</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>




</head>
<body>
    <?php
    include_once("header.php");

    ?>
    <!-- Shop -->
    <section class="shop container">
        <h2 class="section-title">Shop Watches</h2>
        <!-- Content -->
        <div class="shop-content">
            <!-- Box 1 -->
            <div class="product-box">
                <img src="img/product1.jpg" alt="" class="product-img">
                <h2 class="product-title">SCHAFFHAUSEN</h2>
                <span class="price">$25</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <div class="product-box">
                <img src="img/product1.jpg" alt="" class="product-img">
                <h2 class="product-title">SCHAFFHAUSEN</h2>
                <span class="price">$25</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <div class="product-box">
                <img src="img/product1.jpg" alt="" class="product-img">
                <h2 class="product-title">SCHAFFHAUSEN</h2>
                <span class="price">$25</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!--box 1 -->
            <!-- Box 2 -->
            <div class="product-box">
                <img src="img/product2.jpg" alt="" class="product-img">
                <h2 class="product-title">TISSOT</h2>
                <span class="price">$100</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 3 -->
            <div class="product-box">
                <img src="img/product3.jpg" alt="" id="imgw" class="product-img">
                <h2 class="product-title">SEIKO</h2>
                <span class="price">$45</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 4 -->
            <div class="product-box">
                <img src="img/product4.jpg" alt="" class="product-img">
                <h2 class="product-title">BREITLING</h2>
                <span class="price">$24.04</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 5 -->
            <div class="product-box">
                <img src="img/product5.jpg" alt="" class="product-img">
                <h2 class="product-title">VITAE</h2>
                <span class="price">$50</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 6 -->
            <div class="product-box">
                <img src="img/product6.jpg" alt="" class="product-img">
                <h2 class="product-title">VITAE</h2>
                <span class="price">$50</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 7 -->
            <div class="product-box">
                <img src="img/product7.jpg" alt="" id ="imgw" class="product-img">
                <h2 class="product-title">IENTE</h2>
                <span class="price">$70</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 8 -->
            <div class="product-box">
                <img src="img/product8.jpg" alt="" id="imgw" class="product-img">
                <h2 class="product-title">A | X</h2>
                <span class="price">$45</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        </div>
    </section>
    <!-- Link TO JS -->
    <script src="js/main.js"></script>
    
</body>
</html>