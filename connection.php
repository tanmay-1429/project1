<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "college_project1";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn){
        //echo "Connection OK";
    }
    else{
        echo "Connection Failed!";
    }
?>