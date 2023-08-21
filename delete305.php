<?php
    
    
$con=mysqli_connect('localhost','root',"");
mysqli_select_db($con,'userregistration');
    
    
    
    
    $sql="DELETE  FROM  305room WHERE seatnumber='$_GET[seatnumber]'";
    if(mysqli_query($con,$sql))
    header('location:305room.php');

    else{
    echo "not deleted";
}
    ?>