<?php // Script 8.4 - about.php
   include('templates/Header.html');?>

    <style>
#container {
    width: 800px;
    background-color: #28415e;
    margin: auto;
}
#first {
    width: 400px;
    float: left;
    height: 360px;
    background-color: #ecdbcb;
    padding-left: 10px;
    padding-right: 10px;
}
#second {
    width: 400px;
    float: right;
    height: 360px;
    background-color: #69c3c1;
    padding-left: 10px;
    padding-right: 10px;
}
    </style>
    <h2>About Us</h2>
    
    <div id="container">
    <p style="font-size:30px; text-align:center; color:grey;">Worldview Goals:</p>
    <div id="first">
    <p style="font-size:24px; color:black; text-align:center;">The goal of <b>Books for All, All for Books</b> is to bring books and the joy of reading to all. 
        When you purchase a book the price you pay goes to buying that book for a school of your choices.
        That school will be gifted with the book to their Library so that kids all over can read
        and have a chance to expand their horizons.<p></div>
    <div id="second">
    <p style="font-size:18px; color:white; text-align:center;">At <b>Books for All, All for Books</b> we believe in cheefully giving and hold close to the standard set for us in the bible, <br> 2 Corinthians 9:6-8 <br> The point is this: whoever sows sparingly will also reap sparingly, and whoever sows bountifully will also reap bountifully. Each one must give as he has decided in his heart, not reluctantly or under compulsion, for God loves a cheerful giver. And God is able to make all grace abound to you, so that having all sufficiency in all things at all times, you may abound in every good work. </p>
    </div>
    <br>
    <p style="font-size:18px; color:grey; text-align:center">Books will change weekly to allow variety.</p>
    <hr>
    </div>
    <h2> Comments About Books for All. </h2>
    
<?php //  comments section

$dbc = mysqli_connect('localhost', 'brian', 'brian1', 'booksforall');

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


<?php include('templates/footer.html');?>