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
    else{
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $username = $_POST['uname'];
        $password = $_POST['pword'];
        $gender = $_POST['gender'];
        $year = $_POST['academic_yr'];




?>
