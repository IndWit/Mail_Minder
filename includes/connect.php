<?php 
// connect to the database
$con=mysqli_connect('localhost','root','','mailminder');
if(!$con){
    die(mysqli_error($con));
}


?>