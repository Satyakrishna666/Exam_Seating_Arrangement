<?php global $user; ?>
<!DOCTYPE html>
<html>
<head>
    <style>
  body{
   background-image: url("mrubg.jpg");
   background-repeat: no-repeat;
   background-size: cover; 
  }
  .login-box{
    max-width:500px;
    float:none;
    margin:150px auto;
    padding-top: 3px;

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
	<h1 style="text-align: center ;color: black"><b> ADMIN LOGIN</b></h1><br><br>
   

<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-lg-8 login-left" >
        <h1> Login here</h1>
         <?php
        if(isset($_GET['error']))
        {
        if($_GET["error"]=="wrongcredentials")
       {
    echo '<p class="loginerror" style="color:red">wrong credentials</p>';
  }
}
?>
         <form action="Validation2.php" method="post">
         	<div class="form-group">
         		<label><h3> Username:</h3></label>
         		<input type="text" name="user" class="form-control" required>
         	</div>
         	<div class="form-group">
         		<label><h3> Password:</h3></label>
         		<input type="password" name="password" class="form-control" required>
         	</div>
         	<button class="btn btn-primary" type="submit"> Login</button>
       </form>
     </div>
         
     
</div><a class="btn btn-default" href="firsthome.php">GO BACK</a>
</body>
</div>	

</html