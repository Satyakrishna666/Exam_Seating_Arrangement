<?php
    
    
$con=mysqli_connect('localhost','root',"");
mysqli_select_db($con,'userregistration');
    
    
    
    
    $sql="DELETE  FROM addtable WHERE seatnumber='$_GET[seatnumber]'";
    if(mysqli_query($con,$sql))
    header('location:306room.php');

    else{
    echo "not deleted";
}
    ?>