<?php
    
    
$con=mysqli_connect('localhost','root',"");
mysqli_select_db($con,'userregistration');
    
    
    
    
    $sql="DELETE  FROM addtable WHERE id='$_GET[id]'";
    if(mysqli_query($con,$sql))
    header('location:ecedept.php');

    else{
    echo "not deleted";
}
    ?>