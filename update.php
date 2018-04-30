<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'urcscon3_olicode');
define('DB_PASSWORD', 'benoudrih');
define('DB_NAME', 'urcscon3_beijing5');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
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
