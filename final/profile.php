<?php
$con=mysqli_connect("localhost","brian","brian1","booksforall");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to Database: " . mysqli_connect_error();
}
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
if ($_SESSION['role'] != 'admin') {
    header('Location: not_welcome.php');
    exit;
}

$result = mysqli_query($con,"SELECT username, role, created_date, id FROM users");

echo "<table border='1'>
<tr>
<th>Username</th>
<th>Role</th>
<th>Timestamp</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['role'] . "</td>";
echo "<td>" . $row['created_date'] . "</td>";
echo "<td><a href=\"delete_user.php?id={$row['id']}\">" . $row['id'] . "Delete </td>";
echo "</tr>";
}
echo "</table>";


mysqli_close($con);
?>