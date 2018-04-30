<?php  
	$databaseHost = '66.147.242.186';
	$databaseName = 'urcscon3_beijing5';
	$databaseUsername = 'urcscon3_olicode';
	$databasePassword = 'benoudrih';
	 
	$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
	$vote = $_POST['vote'];
	
	$sql = "INSERT INTO vote(vote) VALUES ('$vote')";
	mysqli_query($connect, $sql);
	header("location: thanks.php");
	mysqli_close($connect); 
 ?>

if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

