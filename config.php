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
 
$databaseHost = '66.147.242.186';
$databaseName = 'urcscon3_beijing5';
$databaseUsername = 'urcscon3_olicode';
$databasePassword = 'benoudrih';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>
