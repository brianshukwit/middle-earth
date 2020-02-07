<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"
    <title> Brian Shukwit CSIS 410 Homework Assignment 2</title>
</head>
<body>
<br>
<img src="wolf.jpg" alt="Wolf" class="center" width="150" height="200">
<?php

$name = "Wolf";
$job = "being two years old";
$book = "anything with puppies.";
$interest = "puppies and hanging out with mom";

print "<p> His name is $name";
print "<p> He works as $job";
print "<p> His favorite books are $book";
print "<p> His interests include $interest";
?>
<br>
<a href="http://brianshukwit.shawnmcginty.com/variables.php">Back to Tree</a>
<br>
            </body>
     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
            <?php
            echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
            ?>
          </div>
          <p>
      <a href="https://validator.w3.org/check?uri=referer"><img
          src="http://www.w3.org/Icons/valid-xhtml10"
          alt="Valid XHTML 1.0!" height="31" width="88" /></a>
    </p>
     </footer>

</html>