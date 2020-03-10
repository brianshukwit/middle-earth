<!-- navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Books For All - All for Books</a>
        </div>
 
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
 
                <!-- highlight if $page_title has 'Products' word. -->
                <li <?php echo strpos($page_title, "Product")!==false ? "class='active'" : ""; ?>>
                    <a href="products.php">Shop Books</a>
                </li>
                <li><a href="contact.php"> Contact </a></li>
                <li><a href="about.php"> About </a></li>
                <li><a href="login.php"> Login/Logout </a></li>
                <li><a href="register.php"> Register </a></li>
                <li><a href="profile.php"> User Profiles </a></li>
                <li>
                <a href="cart.php"> <?php
                // count products in cart
                 $cart_item->user_id=1; // default to user with ID "1" for now
                 $cart_count=$cart_item->count(); 
                 ?> Cart <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
                </a></li>
            </ul>
 
        </div><!--/.nav-collapse -->
 
    </div>
</div>
<!-- /navbar -->