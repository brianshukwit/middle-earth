<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Brian Shukwit CSIS 410 Homework Assignment</title>
    </head>

<body>

    <div>
        <p>PHP FORM</p>

    
        <form action="handle_reg.php" method="post">

            <p>Family Member:
                <select name="name">
                
                    <option value="">Pick One</option>
                
                    <option value="brian">Brian</option>
                
                    <option value="grace">Grace</option>
                
                    <option value="emery">Emery</option>
                
                    <option value="charlie">Charlie</option>
                    <option value="solomon">Solomon</option>
                    <option value="wolf">Wolf</option>
                    </select>
            </p>
            <p>Job:
                <input type="text" name="job" size="25">
            </p>
            <p>Book:
                <input type="text" name="book" size="25">
            </p>
            <p>Interest:
                <input type="text" name="interest" size="20">
            </p>
            <input type="submit" name="submit" value="Submit">
        </form>
        </div>
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