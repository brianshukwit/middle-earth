<!doctype html>
   <html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Edit Comment</title>
   </head>
   <body>
   <h1>Edit a Comment</h1>
   <?php //  edit_entry.php

$dbc = mysqli_connect('localhost', 'brian', 'brian1', 'brianshukwit');
//Set the character set:
mysqli_set_charset($dbc, 'utf8');
if (isset($_GET['id']) && is_numeric($_GET['id'])) { // Display the entry in a form:
    // Define the query.
    $query = "SELECT title, comment FROM comments WHERE id={$_GET['id']}";
    if ($r = mysqli_query($dbc, $query)) { // Run the query.
        $row = mysqli_fetch_array($r); // Retrieve the information.
        // Make the form:
        print '<form action="edit_entry.php" method="post">
   <p>Title: <input type="text" name="title" size="40" maxsize="100" value="' . htmlentities($row['title']) . '"></p>
  <p>Comment: <textarea name="comment" cols="40" rows="5">' . htmlentities($row['comment']) . '</textarea></p>
   <input type="hidden" name="id" value="' . $_GET['id'] . '">
   <input type="submit" name="submit" value="Update this Comment!">
   </form>';
    } else { // Couldn't get the information.
        print '<p style="color: red;">Could not retrieve the comment because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
    }
} elseif (isset($_POST['id']) && is_numeric($_POST['id'])) { // Handle the form.
    // Validate and secure the form data:
    $problem = FALSE;
    if (!empty($_POST['title']) && !empty($_POST['comment'])) {
        $title = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['title'])));
        $comment = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['comment'])));
    } else {
        print '<p style="color: red;">Please submit both a title and a comment.</p>';
        $problem = TRUE;
    }
    if (!$problem) {
        // Define the query.
        $query = "UPDATE comments SET title='$title', comment='$comment' WHERE id={$_POST['id']}";
        $r     = mysqli_query($dbc, $query); // Execute the query.
        // Report on the result:
        if (mysqli_affected_rows($dbc) == 1) {
            print '<p>The comment has been updated.</p>';
            print '<form action="view_comments.php"> <input type="submit" value="Back to Comments" /> </form>';
        } else {
            print '<p style="color: red;">Could not update the comment because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
        }
    } // No problem!
} else { // No ID set.
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