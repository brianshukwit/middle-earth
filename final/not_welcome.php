<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"
    <title>Books for All, All for Books</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
            <div>
				<ul class="navigation">
					<li class="home"><a href="index.php">Home</a></li>				
				</ul>
			</div>
<h1> NOT SO FAST </h1>

<?php 
print "<b>PLEASE LOGIN FIRST OR USE THE CORRECT ACCOUNT!</b>";
?>
<br>
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