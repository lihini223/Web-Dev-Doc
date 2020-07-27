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
        $delete = $_POST['del'];
        $deletequery = "DELETE FROM student WHERE firstname = '$delete';";
        $_result = mysqli_query($conn,$deletequery);

        if($_result == TRUE){
            echo("Record Deleted Successfully!");
        }
        else{
            echo("Deletion Failed!");
        }

    }

?>
