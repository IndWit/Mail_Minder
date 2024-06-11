<?php

$host="localhost";

$user="root";

$password="";

$db="project";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");
}

    if($_SERVER["REQUEST_METHOD"]==POST) {
        $name = $_POST['userid'];

        $pass = $_POST['password'];

        $sql="select * from user where userid='" .$name. "' AND password='".$pass."' ";

        $result=mysqli_query($data,$sql);

        $row=mysqli_fetch_array($result);

        if($row["usertype"]=="officer")
        {
            header("location:stud")
        }
    }

?>