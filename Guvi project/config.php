<?php
$conn =mysqli_connect('localhost','root','','wincoderuser_db');

if(mysqli_connect_errno())
{
    echo "Failed to connectto MySQL: " . mysqli_connect_error();
    
}
?>