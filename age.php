<html>
    <head>
        <style>
             body{
   background-image: url("mru3.jpg");
   background-repeat: no-repeat;
   background-size: cover; 
  }
  </style>
    </head>
<body>  
<form method="post">  
    <b>Enter your Name:</b><br>  
    <input type="text" name="name" id="name"></br> 
<b>Your Age:</b></br>
    <input type="number" name="age" id="age"> </br> 
    <input type="submit" name="submit" value="Submit" />  
</form>  
<?php 
   if($_POST){   
     $age=$_POST['age'];
     $name=$_POST['name'];

     
       if ($age<18)
       {
        echo "hello $name. , you are not authorized to visit the site";
       }
       else
       {
        echo "welcome  $name. ,to this site";
       }
    }  
?>  
</body>