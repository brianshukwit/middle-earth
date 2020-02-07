<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-">
    <title>Registration</title>
    <style type="text/css" media="screen">
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Results</h1>
    <?php 
  // Flag variable to track success:
  $okay = true;

  if (empty($_POST['name'])) {
    print '<p class="error">Please enter a name.</p>';
    $okay = false;
  }
  else {$name = $_POST['name'];}

  if (empty($_POST['job'])) {
     print '<p class="error">Please enter a job.</p>';
     $okay = false;
  }
  else {$job = $_POST['job'];}

  if (empty($_POST['book'])) {
     print '<p class="error">Please enter a book.</p>';
     $okay = false;
  }
  else {$book = $_POST['book'];}

  if (empty($_POST['interest'])) {
    print '<p class="error">Please enter an interest.</p>';
    $okay = false;
 }
 else {$interest = $_POST['interest'];}

 // $job = $_POST['job'];
 // $book = $_POST['book'];
 // $interest = $_POST['interest'];

  if ($okay) {
      print 'Success!';
      print "<p> His name is $name";
      print "<p> He works as $job";
      print "<p> His favorite books are $book";
      print "<p> His interests include $interest";
  }

  ?>
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