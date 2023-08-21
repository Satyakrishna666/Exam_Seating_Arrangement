<!DOCTYPE html>
<html>
<head>
    <style>
  body{
   background-image:url("exam.jpeg");
   background-repeat: no-repeat;
   background-size: cover; 
  }
  label{
    font-size: 20px;
    padding: 6px;
  }


</style>
	<title>Login and Registration</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
</head>
<body>
	<h1 style="text-align: center; font-family:Times New Roman">ADD NEW STUDENT</h1>
<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-lg-4 login-left" >
        

         <form action="addstudentdb.php" method="post">
         	<div class="form-group">
         		<label> Student Name:</label>
         		<input type="text" name="user" class="form-control" required >
         	</div>
         	<div class="form-group">
         		<label> Roll Number:</label>
         		<input type="text" name="roll" class="form-control" required>
         	</div>
            <div class="form-group">
                <label> Department:</label>
                <input type="text" name="department" class="form-control" required>
                    
                </select>
            </div>
            <div class="form-group">
                <label class="radio-inline">Section</label>
                    <input type="radio" name="section" value="A" required>A</label>
                                <label class="radio-inline"><input type="radio" name="section" value="B">B</label>
            </div>
            <div class="form-group">
                <label> Seat number:</label>
                <input type="text" name="seatnumber" class="form-control" required>
            </div>
            <div class="form-group">
                <label> class allocated:</label>
                <input type="text" name="class" class="form-control" required>
            </div>
            <div class="form-group">
                <label> block:</label>
                <input type="text" name="block" class="form-control" required>
            </div>

         	          <button class="btn btn-danger" type="submit">ADD</button>
       </form>
     </div>
		

        </div>
	</div>
</div>
</div>	
</body>
</html