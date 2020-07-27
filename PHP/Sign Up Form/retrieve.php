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
        $sql = "SELECT * FROM student;";
        $result = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_array($result)){
            echo $row['firstname'];
            echo "<br/>";
            echo $row['lastname'];
            echo "<br/>";
        }
    }

?>
