<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Records</title>
</head>
<body>
<?php
// connect to the database
include('connect-db.php');

// get results from database
$result = mysqli_query($connection, "SELECT * FROM accounts");
?>

<table border>
  <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th></th>
    <th></th>
  </tr>
<?php
// loop through results of database query, displaying them in the table
while($row = mysqli_fetch_array( $result )) {
?>
  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['firstname']; ?></td>
    <td><?php echo $row['lastname']; ?></td>
    <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
  </tr>
<?php
// close the loop
}
?>
</table>

<div>
	<a href="new.php">Add a new record</a>
</div>
</body>
</html>
