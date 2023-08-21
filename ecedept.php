
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
	width:90%;
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
input{
   width:100%;

}
</style>  
<head>
	<title> Home page</title>
		
<link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"   
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
     
	<h1>ALLOCATION</h1>

	<?php
	
	
$con=mysqli_connect('localhost','root',"");
mysqli_select_db($con,'userregistration');
	
	
	
	
	$sql="SELECT * FROM userregistration.sql where department='IV'; ";
	$records=mysqli_query($con,$sql);
	?>
	<table>
	<tr>
		<th>user</th>
		<th>roll</th>
		<th>department</th>
		<th>section</th>
        <th>seatnumber</th>
        <th>class</th>
        <th>block</th>
        <th colspan="2" align="center">Operation</th>
</tr>
<?php
	$total=mysqli_num_rows($records);
	if($total!=0)
		{
			while($row=mysqli_fetch_array($records))
			{ echo "<tr><form action=updateece.php method=post>";
	         	echo "<td><input type=text name=user value='".$row['user']."'></td>";	
	         	echo "<td><input type=text name=roll value='".$row['roll']."'></td>";	
	         	echo "<td><input type=text name=department value='".$row['department']."'></td>";		
	         	echo "<td><input type=text name=section value='".$row['section']."'></td>";	
	         	echo "<td><input type=text name=seatnumber value='".$row['seatnumber']."'></td>";
	         	echo "<td><input type=text name=class value='".$row['class']."'></td>";	
	         	echo "<td><input type=text name=block value='".$row['block']."'></td>";
	         	echo "<input type=hidden name=id
	         	 value='".$row['id']."'>"	;
	         	echo "<td><input type=submit style=background-color:green;color:white; value=update></td>"	;
	         	echo "<td><a href=deletIV.php?id=".$row['id'].">Delete</a></td>";
	         	echo  "</form></tr>";	
		} 
		echo "</table>";
	}else{
		echo "no result";}
  $con->close();
  ?>
</table>

	

		
<a class="btn btn-danger" href="choose.php">GO BACK</a>
     </div>

</div>

</body>
</html> 