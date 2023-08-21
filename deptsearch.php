
?>
<!DOCTYPE html>
<html>
<style >
	
</style>
<head>
	<title>
		VIEW DEPARTMENT
	</title>

<meta charset="utf-8">
<meta name="viewreport" content="widhth-device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"   
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
<div class="card">

  <div class="card-header"><h1 style="text-align: center;">SEAT ALLOCATION</h1></div>
  <?php
	
	
$con=mysqli_connect('localhost','root',"");
mysqli_select_db($con,'userregistration');
	
	
	
	
	$sql="SELECT * FROM addtable ";
	$records=mysqli_query($con,$sql);
	?>
  <div class="card-body">
    <h5 class="card-title">search department here</h5>
    <form action="" method="POST">
				<input type="text" name="department" placeholder="enter the department here">
				<input type="submit" class="btn btn-primary"   name="search" value="SEARCH">
			</form>
    <table class="table table-dark table-hover table-bordered    ">
  <thead></thead>   <tr>
      <th scope="col">NAME</th>
      <th scope="col">ROLL NUMBER</th>
      <th scope="col">DEPARTMENT</th>
      <th scope="col">SECTION</th>
      <th scope="col">SEAT NUMBER</th>
      <th scope="col">CLASS</th>
      <th scope="col">BLOCK</th>
       
    </tr>
     <br>
    <?php
    $con=mysqli_connect('localhost','root',"");
     $db=mysqli_select_db($con,'userregistration');
     if(isset($_POST['search']))
     {
     	$department=$_POST['department'];
     	$query="SELECT * FROM addtable WHERE department='$department'";
     	$query_run=mysqli_query($con,$query);

     	while($row=mysqli_fetch_array($query_run))
     	{
     		?>
     		<tr>
     			<td> <?php echo $row['user']; ?></td>
     			<td> <?php echo $row['roll']; ?></td>
               <td> <?php echo $row['department']; ?></td>
     			 <td> <?php echo $row['section']; ?></td>
     			<td> <?php echo $row['seatnumber']; ?></td>
     			  <td> <?php echo $row['class']; ?></td>
     			  <td> <?php echo $row['block']; ?></td>
     		</tr>
     		<?php

     	}
     }
    ?>
  </thead>
  <tbody>
  	
    
    
  </tbody>
</table>
<a class="btn btn-danger" href="home2.php">GO BACK</a>

  </div>
</div>
</div>
</div>
</body>
</html>
