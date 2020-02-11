<?php // Script 8.4 - index.php
   /* This is the home page for this site.
   It uses templates to create the layout.
    */

   // Include the header:
   include('templates/Header.html');
   // Leave the PHP section to display lots
   ?>

<div class="shopping-cart">
      <div class="shopping-cart-head">
        <span class="product-quantity">0</span> Product(s) in Cart
      </div>
      <ul class="shopping-cart-list">
      </ul>
      <div class="cart-buttons">
        <a href="#0" class="button empty-cart-btn">Empty</a>
        <a href="#0" class="button cart-checkout">Checkout - <span class="total-price">$0</span></a>
      </div>
    </div>
  </div><!-- container -->


<?php // Return to PHP.
  include('templates/footer.html');
?>