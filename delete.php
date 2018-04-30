<?php
define('DB_SERVER', '66.147.242.186');
define('DB_USERNAME', 'urcscon3_olicode');
define('DB_PASSWORD', 'benoudrih');
define('DB_NAME', 'urcscon3_beijing5');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if(isset($_POST["id"]))
{
 $query = "DELETE FROM user WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
