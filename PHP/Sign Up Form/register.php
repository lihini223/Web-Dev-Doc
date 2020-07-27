<?php
    //connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        //echo("Connection Failure!");
        die("Connection Failed".mysqli_connect_error());
    }




?>
