<!doctype html>
   <html lang="en">
   <head>
      <meta charset="utf-8">
      <title>View Comment</title>
   </head>
   <body>
   <h1>View Comment</h1>
   <?php //  view_comments.php

$dbc = mysqli_connect('localhost', 'brian', 'brian1', 'brianshukwit');

$query = 'SELECT * FROM comments ORDER BY comment_date DESC';
if ($r = mysqli_query($dbc, $query)) { // Run the query.
    // Retrieve and print every record:
    while ($row = mysqli_fetch_array($r)) {
        print "<p><h4>Commenter Name: {$row['name']} </h4><h3>Title: {$row['title']} </h3> <h5>Date: {$row['comment_date']}</h5> Comment: {$row['comment']}<br> <hr>
        <a href=\"edit_entry.php?id={$row['id']}\">Edit</a>
        <a href=\"delete_entry.php?id={$row['id']}\">Delete</a>
        <a href=\"add_comment.php\">Add Comment</a>
        </p><hr>\n";
    }
} else { // Query didn't run.
    print '<p style="color: red;">Could not retrieve the data because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
} // End of query IF.
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