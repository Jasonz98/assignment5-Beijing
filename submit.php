<?php  
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


	$favorite = Trim(stripcslashes($_POST["favorite"]));
	
	$query = "INSERT INTO favorite (favorite1) VALUES ('$favorite')";
  $result = mysqli_query($link, $query); 
 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/menu-highlighter.js"></script>
	<title>Survey</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" href="css/override.css">
  <link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
</head>
<header>
      <h1>Basketball</h1>
      <div>
          <a href="login.php">Sign in by clicking this!</a>
	      <div>Don't have an account?<a href="register.php"> Sign up by clicking this!</a></div>
      </div>
    </header>
<body>
  
    <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
    <li><a href="history.php">History</a></li>
    <li><a href="rules.php">Rules</a></li>
    <li><a href="nba.php">NBA</a></li>
    <li><a href="players.php">Players</a></li>
    <li><a href="survey.php">Take a survey?</a></li>
        </ul>
      </nav> 
  
  <h2>Thank you for voting!</h2>
	
<footer>
  Website created by Team Beijing
</footer>
<?php
  mysqli_close($connection);
?>
