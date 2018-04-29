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
          <div>Don't have an account?<a href="register.php"> Sign up by clicking this!</a>
      </div>
    </header>
<body>
  
    <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
    <li><a href="history.html">History</a></li>
    <li><a href="rules.html">Rules</a></li>
    <li><a href="nba.html">NBA</a></li>
    <li><a href="players.html">Players</a></li>
    <li><a href="survey.html">Take a survey?</a></li>
        </ul>
      </nav>  
	
<h2>Vote for the greatest team of all time!</h2>
        <p>Please choose one</p>    

<form action="submit.php" method="post">

                <input class="together" type="radio" name="vote" class="form-control" value="celtics"> Boston Celtics <br>
                <input class="together" type="radio" name="vote" class="form-control" value="bulls"> Chicago Bulls <br>
                <input class="together" type="radio" name="vote" class="form-control" value="lakers"> Los Angeles Lakers <br>
            
                <input type="submit" class="btn btn-primary" value="Submit">
            <br>
        </form>

<footer>
  Website created by Team Beijing
</footer>

    	

    





<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/menu-highlighter.js"></script>
</body>



</html>
