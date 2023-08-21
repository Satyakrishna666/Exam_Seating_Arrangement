<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:adminlogin.php');
}

?>
<html>
<head>

<style>
  body{
   background-image:url("white.jpeg");
   background-repeat: no-repeat;
   background-size: cover; 
  }

</style>  
	<title> Home page</title>
		
<link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"   
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
</head>
<body>
    <div class="container">
  <CENTER> 
	<h1>Welcome <? echo $_SESSION['username'];?></h1>

	
  
<img  src="adminicon.png" width="200" height="200"><br><br>

<a class="btn btn-primary" href="roomnumber.php">ADD STUDENT</a><br><br>
<a class="btn btn-primary" href="roomsearch.php">VIEW ALLOCATION</a><br><br>
<a class="btn btn-primary" href="choose.php">EDIT ALLOCATION</a><br><br>
<a class="btn btn-primary" href="roompage.php">ROOM DETAILS</a><br><br>

<a class="btn btn-danger" href="logoutt2.php">LOGOUT</a>
</CENTER>
     </div>

</div>

</body>
</html> 