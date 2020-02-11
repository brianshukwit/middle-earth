<?php // Script 8.4 - index.php
   /* This is the home page for this site.
   It uses templates to create the layout.
    */

   // Include the header:
   include('templates/Header.html');
   // Leave the PHP section to display lots
   ?>

    <h2>Books - Store </h2>
    <p> Books for All, All for Books</p>
 
<div class="container">
 
	<div class="row">
	  <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src="images/keepers_of_grimoire.jpg" alt="image title" height="200" width="200">
	      <div class="caption">
	        <h3>Keepers of Grimoire: Rise of the Keepers</h3>
	        <p>by Brian Shukwit. Genre: Fantasy</p>
	        <p>$10</p>
	        <p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p><hr>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src="images/zelda.jpg" alt="image title" height="200" width="200">
	      <div class="caption">
	        <h3>Legend of Zelda: Hyrule Historia</h3>
	        <p>Lore pertaining to the video game series, Legend of Zelda.</p>
	        <p>$20</p>
	        <p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p><hr>
	      </div>
	    </div>
	  </div>
	  
	  <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src="images/narnia.jpg" alt="image title" height="200" width="200">
	      <div class="caption">
	        <h3>Chronicles of Narnia</h3>
	        <p>by C.S. Lewis. Contains all seven books in total. </p>
	        <p>$30</p>
	        <p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p><hr>
	      </div>
	    </div>
	  </div>

	  <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src="images/gondolin.jpg" alt="image title" height="200" width="200">
	      <div class="caption">
	        <h3>Fall of Gondolin</h3>
	        <p>by J.R.R. Toilkien. Genre: Fantasy</p>
	        <p>$10</p>
	        <p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p><hr>
	      </div>
	    </div>
	  </div>

	  <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src="images/lefthand.jpg" alt="image title" height="200" width="200">
	      <div class="caption">
	        <h3>Martin the Warrior</h3>
	        <p>by Brian Jacques. Genre: Fantasy</p>
	        <p>$10</p>
	        <p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p><hr>
	      </div>
	    </div>
	  </div>

	  <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src="images/righthand.jpg" alt="image title" height="200" width="200">
	      <div class="caption">
	        <h3>Mistborn</h3>
	        <p>by Brandon Sanderson. Genre: Fantasy </p>
	        <p>$10</p>
	        <p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p><hr>
	      </div>
	    </div>
	  </div>

	  <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src="images/opal_mystery.jpg" alt="image title" height="200" width="200">
	      <div class="caption">
	        <h3>the Opal Mystery</h3>
	        <p>by Stella Fabian.</p>
	        <p>$10</p>
	        <p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p><hr>
	      </div>
	    </div>
	  </div>

	  <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src="images/long_patrol.jpg" alt="image title" height="200" width="200">
	      <div class="caption">
	        <h3>the Long Patrol</h3>
	        <p>by Brian Jacques. Genre: Fantasy</p>
	        <p>$10</p>
	        <p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p><hr>
	      </div>
	    </div>
	  </div>

	  <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src="images/legend_of_luke.jpg" alt="image title" height="200" width="200">
	      <div class="caption">
	        <h3>the Legend of Luke</h3>
	        <p>by Brian Jacques. Genre: Fantasy</p>
	        <p>$10</p>
	        <p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p><hr>
	      </div>
	    </div>
	  </div>

	  <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src="images/master_plots.jpg" alt="image title" height="200" width="200">
	      <div class="caption">
	        <h3>Master Plots</h3>
	        <p>by Ronald B. Tobius. Genre: Non-Fiction</p>
	        <p>$10</p>
	        <p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p><hr>
	      </div>
	    </div>
	  </div>
	</div>
 
</div>


<?php include('templates/footer.html');?>