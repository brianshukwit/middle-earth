<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Create a Table</title>
</head>
<body>
<?php // create_table.php
if ($dbc = @mysqli_connect('localhost', 'brian', 'brian1', 'brianshukwit')) {
		$query = 'CREATE TABLE comments (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(150) NOT NULL,
	title VARCHAR(150) NOT NULL,
	comment VARCHAR(150) NOT NULL,
	comment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
	) CHARACTER SET utf8 ';
		if (@mysqli_query($dbc, $query)) {
		print '<p>The table has been created!</p>';
		} else {
		print '<p style="color:red;">Could not creat the table because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
		}
		mysqli_close($dbc);
}	else {
	print '<p style="color:red;">Could not connect to the database:<br>' . mysqli_connect_error() . '.</p>';
}
?>
</body>
</html>










