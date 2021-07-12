<?php
    $server="localhost";
    $username="root";
    $password="";
    $conn= mysqli_connect($server, $username, $password);

    if(!$conn){
        die("connection to database failed". mysqli_connect_error());
    }
    $Name=$_POST["Name"];
    $Age=$_POST["Age"];
    $Gender=$_POST["Gender"]
    $Phone=$_POST[]
?>