<?php

session_start();
$con=mysqli_connect('localhost','root',"");
mysqli_select_db($con,'userregistration');

$user=$_POST['user'];
$roll=$_POST['roll'];
$department=$_POST['department'];
$section=$_POST['section'];
$seatnumber=$_POST['seatnumber'];
$class=$_POST['class'];


$ss="select * from 303room where roll='$roll'" ;
$r=mysqli_query($con,$ss);
$number=mysqli_num_rows($r);
$s="select * from 303room where seatnumber='$seatnumber'" ;
$result=mysqli_query($con,$s);
$n=mysqli_num_rows($result);

$query="select * from 303room " ;
$res=mysqli_query($con,$query);
$num=mysqli_num_rows($res);
if($number==1){
	header('location:add303.php?error=alreadyallocated');
}
else if($n==1)
{
	header('location:add303.php?error=seatallocated');
}
else if($num==15)
{
	header('location:add303.php?error=roomsize');
}
else{
	$reg="insert into 303room(user,roll,department,section,seatnumber,class) values('$user','$roll','$department','$section','$seatnumber','$class')";

	mysqli_query($con,$reg);
	header('location:add303.php?error=added');
}


?>
