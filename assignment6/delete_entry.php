<!doctype html>
   <html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Delete Comment</title>
   </head>
   <body>
   <h1>Delete a Comment</h1>
   <?php //  view_comments.php
$dbc = mysqli_connect('localhost', 'brian', 'brian1', 'brianshukwit');
if (isset($_GET['id']) && is_numeric($_GET['id'])) { // Display the entry in a form:
    // Define the query:
    $query = "SELECT title, comment FROM comments WHERE id={$_GET['id']}";
    if ($r = mysqli_query($dbc, $query)) { // Run the query.
        $row = mysqli_fetch_array($r); // Retrieve the information.
        // Make the form:
        print '<form action="delete_entry.php" method="post">
         <p>Are you sure you want to delete this entry?</p>
         <p><h3>' . $row['title'] . '</h3>' . $row['comment'] . '<br>
         <input type="hidden" name="id" value="' . $_GET['id'] . '">
         <input type="submit" name="submit" value="Delete this Comment!"></p>
         </form>';
    } else { // Couldn't get the information.
        print '<p style="color: red;">Could not retrieve the blog entry because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
    }
} elseif (isset($_POST['id']) && is_numeric($_POST['id'])) { // Handle the form.
    // Define the query:
    $query = "DELETE FROM comments WHERE id={$_POST['id']} LIMIT 1";
    $r     = mysqli_query($dbc, $query); // Execute the query.
    // Report on the result:
    if (mysqli_affected_rows($dbc) == 1) {
        print '<p>The comment has been deleted.</p>';
        print '<form action="view_comments.php"> <input type="submit" value="Back to Comments" /> </form>';
    } else {
        print '<p style="color: red;">Could not delete the comment because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
    }
} else { // No ID received.
    print '<p style="color: red;">This page has been accessed in error.</p>';
} // End of main IF.
mysqli_close($dbc); // Close the connection.


?>
  </body>
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