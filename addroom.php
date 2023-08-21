<?php global $user; ?>
<!DOCTYPE html>
<html>
<head>
    <style>
  body{
   background-image:url("addroom.jpg");
   background-repeat: no-repeat;
   background-size: cover; 
  }
  .login-box{
    max-width:700px;
    float:none;
    margin:150px auto;

}
.login-left{
    background-color: rgba(211,211,211,0.5);
    padding:20px;
}
.login-right{
    background: #fff;
    padding: 30px;
}
.form-control{
    background-color: transparent !important;
    align-items: cenetr;

}
.form_error span{
    width: 80%;
    height: 35px;
    margin:3px 10%;
    font-size: 1.1em;
    color: #D83D5A;
}

</style>
	<title>login and registration</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
</head>
<body>
	
    <h1 style="text-align: center ;color: black">ADD ROOM HERE</h1>

<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-lg-8 login-left" >
        <h2> Add room</h2>
        <?php
        if(isset($_GET['error']))
        {
        if($_GET["error"]=="alreadyentered")
       {
    echo '<p class="loginerror" style="color:red">Room number already entered</p>';
  }
   if($_GET["error"]=="roomadded")
       {
    echo '<p class="loginerror" style="color:black">Room added successfully</p>';
  }
 
}
?>
         <form action="addroomdb.php" method="post">
         	<div class="form-group">
         		<label> Room number:</label>
         		<input type="text" name="room" class="form-control" required>
         	</div>
         	<div class="form-group">
         		<label> Benches:</label>
         		<input type="text" name="benches" class="form-control" required>
         	</div>
         	<button class="btn btn-primary" type="submit">ADD ROOM</button>
       </form>
     </div>
         
     
</div><a class="btn btn-default" href="roompage.php">GO BACK</a>
</body>
</div>	

</html