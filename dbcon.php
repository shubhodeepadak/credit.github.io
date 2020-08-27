<?php

$con = mysqli_connect('localhost','root','','creditmanagement');

if($con)
{
    //echo "We are connected";
}
else
{
    die("Databse connection failed");
}

?>