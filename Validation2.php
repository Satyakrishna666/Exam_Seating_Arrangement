<?php
mysqli_connect("localhost","root","");

if(mysqli_connect_error())
{
    echo "Cannot Connect";
}
else
{
    echo "Connected";
}

?>
