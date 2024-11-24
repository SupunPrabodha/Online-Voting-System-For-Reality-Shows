<?php

$conn=new mysqli("localhost","root","","voting_system");

if($conn->connect_error)
{
    die("Connection failed".$conn->connect_error);
}
else
{
    echo "successful<br>";
}

?>