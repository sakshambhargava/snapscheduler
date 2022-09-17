<?php
 
        $conn = mysqli_connect("localhost", "root", "root", "snap");

        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $username =  $_REQUEST['username'];
        $password = $_REQUEST['password'];
         

        $sql = "INSERT INTO users VALUES ('$username',
            '" . md5($password) . "')";
         
        if(mysqli_query($conn, $sql)){
            header("Location: ../");

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>