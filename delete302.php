<?php
    
    
$con=mysqli_connect('localhost','root',"");
mysqli_select_db($con,'userregistration');
    
    
    
    
    $sql="DELETE  FROM 302room WHERE seatnumber='$_GET[seatnumber]'";
    if(mysqli_query($con,$sql))
    header('location:302room.php');

    else{
    echo "not deleted";
}
    ?>