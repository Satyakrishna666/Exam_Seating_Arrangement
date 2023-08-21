<!DOCTYPE html>
<html>
<style>
  body{
   background-image:url("white.jpeg");
   background-repeat: no-repeat;
   background-size: cover; 

  }

  
h1{
	color: black !important;
	margin-top: 100px !important;
	
	text-transform: uppercase;
}
table{
	border-collapse:collapse;
	width:70%;
	color:#588c7e;
	font-family: monospace;
	font-size: 15px;
	text-align: left;
}
th{
	background-color:#588c7e;
	color:white;
}
tr:nth-child(even){ background-color: #f2f2f2 }

</style>  
<head>
	<title>
		ALLOTMENT
	</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
</head>
<body>
	<center>
		<h1>VIEW ACCORDING TO BRANCH</h1>
		<div class="container">
			<form action="" method="POST">
				<input type="text" name="department" placeholder="Enter department name  here">
				<input type="submit" class="btn btn-primary"   name="search" value="SEARCH">
			</form>
			<table>
	<tr>
		<th>user</th>
		<th>roll</th>
		<th>department</th>
		<th>section</th>
        <th>seatnumber</th>
        <th>class</th>
        <th>block</th>
    </tr><br>
    <?php
    $con=mysqli_connect('localhost','root',"");
     $db=mysqli_select_db($con,'userregistration');
     if(isset($_POST['search']))
     {
        

     	$department=$_POST['department'];
     	$query="SELECT * FROM addtable WHERE department='$department'";
     	$query_run = mysqli_query($con,$query);
        $num=mysqli_num_rows($query_run); 
        if($num==0)
            {
                echo "No records found";

            }
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
</table><br><br>
<a class="btn btn-danger" href="home2.php">GO BACK</a>

		</div>
	</center>

</body>
</html>