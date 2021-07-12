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
    $Gender=$_POST["Gender"];
    $Phone=$_POST["Phone"];
    $Description=$_POST["Description"];
    $ins_query="INSERT INTO `neptravel`.`customer` ( `Name`, `Age`, `Gender`, `Phone`, `Description`, `DateJoined`) VALUES ('$Name', '$Age', '$Gender', '$Phone', '$Description', current_timestamp());";
    if ($conn->query($ins_query)==true){
        $insert=true;
        echo "your data has been added successfully";
    }
    else{
        echo "ERROR: $ins_query <br> $conn->error";
        
    }
    $conn->close();
?>