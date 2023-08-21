<?php
    
    
$con=mysqli_connect('localhost','root',"");
mysqli_select_db($con,'userregistration');
    
    
    
    
    $sql="DELETE  FROM 303room WHERE seatnumber='$_GET[seatnumber]'";
    if(mysqli_query($con,$sql))
    header('location:303room.php');

    else{
    echo "not deleted";
}
    ?>