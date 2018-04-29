<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basketball</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
<body>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	<li class="active"><a href="index.php"><strong>NY City</strong></a>
	        <li><a href="people.php">People</a></li>
	        <li><a href="food.php">Food</a></li>
	        <li><a href="sights.php">Sights</a></li>
	        <li><a href="signup.php">Signup</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="auth/logout.php">Log out</a></li>
						<!--
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	        	-->
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>


	<div class="container">

		<h1>Admin Panel</h1>

    <div id="live_data"></div>

	</div><!--container-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
      function fetch_data()
      {
           $.ajax({
                url:"database/select.php",
                method:"POST",
                success:function(data){
                     $('#live_data').html(data);
                }
           });
      }
      fetch_data();
      $(document).on('click', '#btn_add', function(){
           var name = $('#name').text();
           var email = $('#email').text();
           var relationship = $('#relationship').text();
           var interest = $('#interest').text();
           if(name == '')
           {
                alert("Enter Name");
                return false;
           }
           if(email == '')
           {
                alert("Enter Email");
                return false;
           }
           if(relationship == '')
           {
                alert("Enter Relationship");
                return false;
           }
           if(interest == '')
           {
                alert("Enter Interest");
                return false;
           }
           $.ajax({
                url:"database/insert.php",
                method:"POST",
                data:{name:name, email:email, relationship:relationship, interest:interest},
                dataType:"text",
                success:function(data)
                {
                     alert(data);
                     fetch_data();
                }
           })
      });
      function edit_data(id, text, column_name)
      {
           $.ajax({
                url:"database/edit.php",
                method:"POST",
                data:{id:id, text:text, column_name:column_name},
                dataType:"text",
                success:function(data){
                     alert(data);
                }
           });
      }
      $(document).on('blur', '.name', function(){
           var id = $(this).data("id1");
           var name = $(this).text();
           edit_data(id, name, "name");
      });
      $(document).on('blur', '.email', function(){
           var id = $(this).data("id2");
           var email = $(this).text();
           edit_data(id,email, "email");
      });
      $(document).on('blur', '.relationship', function(){
           var id = $(this).data("id3");
           var relationship = $(this).text();
           edit_data(id,relationship, "relationship");
      });
      $(document).on('blur', '.interest', function(){
           var id = $(this).data("id4");
           var interest = $(this).text();
           edit_data(id,interest, "interest");
      });
      $(document).on('click', '.btn_delete', function(){
           var id=$(this).data("id5");
           if(confirm("Are you sure you want to delete this?"))
           {
                $.ajax({
                     url:"database/delete.php",
                     method:"POST",
                     data:{id:id},
                     dataType:"text",
                     success:function(data){
                          alert(data);
                          fetch_data();
                     }
                });
           }
      });
 });
  </script>

</body>
</html>
