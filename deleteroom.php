<?php
    
    
$con=mysqli_connect('localhost','root',"");
mysqli_select_db($con,'userregistration');
    
    
    
    
    $sql="DELETE  FROM roomdetails WHERE id='$_GET[id]'";
    if(mysqli_query($con,$sql))
    header('location:roomdetails.php');

    else{
    echo "not deleted";
}
    ?>