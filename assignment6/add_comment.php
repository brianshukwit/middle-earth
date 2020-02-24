<!doctype html>
   <html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Add Comment</title>
   </head>
   <body>
   <h1>Add Comment</h1>
   <?php // add_comment.php
/* This script adds a comment entry to the database. It now does so securely! */
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form.
    // Connect and select:
    $dbc = mysqli_connect('localhost', 'brian', 'brian1', 'brianshukwit');
    //Set the character set:
    mysqli_set_charset($dbc, 'utf8');
    // Validate and secure the form data:
    $problem = FALSE;
    if (!empty($_POST['name']) && !empty($_POST['title']) && !empty($_POST['comment'])) {
        $name = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['name'])));
        $title = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['title'])));
        $comment = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['comment'])));
    } else {
        print '<p style="color: red;">Please submit both a title and a comment.</p>';
        $problem = TRUE;
    }
    if (!$problem) {
        // Define the query:
        $query = "INSERT INTO comments (id, name, title, comment, comment_date) VALUES (0, '$name', '$title','$comment', NOW())";
        // Execute the query:
        if (@mysqli_query($dbc, $query)) {
            print '<p>The comment has been added!</p>';
        } else {
            print '<p style="color: red;">Could not add the comment because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
        }
    } // No problem!
    mysqli_close($dbc); // Close the connection.
} // End of form submission IF.
// Display the form:
?>
 <form action="add_comment.php" method="post">
     <p>Name: <input type="text" name="name" size="40" maxsize="150"></p>
     <p>Title: <input type="text" name="title" size="40" maxsize="150"></p>
     <p>Comment: <textarea name="comment" cols="40" rows="5"></textarea></p>
     <input type="submit" name="submit" value="Post Comment!">
  </form> <hr>
  <form action="view_comments.php"> 
    <input type="submit" value="View Comments"> 
  </form>
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