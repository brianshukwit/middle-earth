
<?php //  index.php

   // Include the header:
   include('templates/Header.html');
   // Leave the PHP section to display lots
   ?>
    <style>      
h2 {outline-color:green;}
h2.solid {outline-style: solid;}
h2.double {outline-style: double;}
.container {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
img {
  opacity: 0.5;
}
  </style>
    <h2 class="double" text-align="center"> Welcome to CMS PROJECT: Books for All, All for Books</h2>
    <div class="container">
  <img src="images/bookstore.jpg" alt="Bookstore" style="width:30%;">
  <div class="centered" style="width:29%"> <p style="font-size:30px; color:black;" >Please visit About Us page to learn more about Books for All, All for Books. Visit Shop Books, Login or Register if you are not a user. Thank you!</p></div>
</div>

    <?php // Return to PHP.
  include('templates/footer.html');
    // Include the footer.
  ?>