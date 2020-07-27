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
    //  $Email = $_POST['email'];
    //  $phone_number = $_POST['phone'];

    $sql = "INSERT INTO student(firstname,lastname,username,password,gender,year)
            VALUES('$firstname','$lastname','$username','$password','$gender','$year');";
    
    if(mysqli_query($conn,$sql) == TRUE){
        echo("Record added successfully!");
    }

?>
