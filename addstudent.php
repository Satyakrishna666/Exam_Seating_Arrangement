<!DOCTYPE html>
<html>
<head>
    <style>
  body{
   background-image:url("add.jpg");
   background-repeat: no-repeat;
   background-size: cover; 
  }
  label{
    font-size: 20px;
    padding: 1px;
  }


</style>
	<title>login and registration</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
</head>
<body>
	<h1 style="text-align: center; font-family:Times New Roman">ADD NEW STUDENT</h1>
      <?php
        if(isset($_GET['error']))
        {
        if($_GET["error"]=="alreadyallocated")
       {
    echo '<p class="loginerror" style="color:red">Student Already allocated</p>';
  }
          if($_GET["error"]=="seatallocated")
       {
    echo '<p class="loginerror" style="color:red">Seat Already allocated</p>';
  }
     if($_GET["error"]=="added")
       {
    echo '<p class="loginerror" style="color:black">Seat allocated successfully</p>';
  }
  if($_GET["error"]=="roomfilled")
       {
    echo '<p class="loginerror" style="color:red">Room is filled</p>';
  }
}
?>
<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-lg-4 login-left" >
        

         <form action="addstudentdb.php" method="post">
         	<div class="form-group">
         		<label> student name:</label>
         		<input type="text" name="user" class="form-control" required >
         	</div>
         	<div class="form-group">
         		<label> Roll number:</label>
         		<input type="text" name="roll" class="form-control" required>
         	</div>
            <div class="form-group">
                <label> Year:</label>
                <select id="department" name="department">
                    
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                    
             </select>


            </div>
            <div class="form-group">
                <label class="radio-inline">Section</label>
                    <input type="radio" name="section" value="A" required>A</label>
                                <label class="radio-inline"><input type="radio" name="section" value="B">B</label>
            </div>
            
           


         	          <button class="btn btn-danger" type="submit">ADD</button>
                      <button class="btn btn-primary" onclick="window.location.href='home2.php'">GO BACK</button>
                  </div> </div>  

       </form>
     </div>
		

        </div>
	</div>
</div>
</div>	
</body>
</html