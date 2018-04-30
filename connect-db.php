<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("66.147.242.186","urcscon3_beijing5","urcscon3_olicode") 
            or die("cannot connected");
 
// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/
 
/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */
 define('DB_SERVER', '66.147.242.186');
define('DB_USERNAME', 'urcscon3_olicode');
define('DB_PASSWORD', 'benoudrih');
define('DB_NAME', 'urcscon3_beijing5');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


