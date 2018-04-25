<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'inclass11');
define('DB_PASSWORD', 'inclass11');
define('DB_NAME', 'inclass11');
 
/* Attempt to connect to MySQL database */
$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 $query = "UPDATE user SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
?>
