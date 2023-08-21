<?php

session_start();
$con=mysqli_connect('localhost','root',"");
mysqli_select_db($con,'userregistration');

$room=$_POST['room'];
$benches=$_POST['benches'];


$ss="select * from roomdetails where room='$room'" ;
$r=mysqli_query($con,$ss);
$number=mysqli_num_rows($r);
if($number==1){
	header('location:addroom.php?error=alreadyentered');
}

else{
	$reg="insert into roomdetails(room,benches) values('$room','$benches')";

	mysqli_query($con,$reg);
	header('location:addroom.php?error=roomadded');
}


?>
