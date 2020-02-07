<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"
    <title> Welcome to Page Two of Brian Shukwit CSIS 410 Homework Assignment 1</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
            <div>
				<ul class="navigation">
					
					<li class="home"><a href="/index.php">Home (Page 1) </a></li>
					<li class="page"><a href="/page2.php">Page 2</a></li>
					<li class="page"><a href="/page3.php">Page 3</a></li>					
				</ul>
			</div>
<h1> PHP INFO </h1>
<br>
<?php phpinfo(); ?>
</body>
     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
            <?php
            echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
            ?>
          </div>
     </footer>
</html>