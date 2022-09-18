<?php
 
        $conn = mysqli_connect("mysql", "u864599893_root", "Root@456", "u864599893_snap");

        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
        global $date,$time;

        $title =  $_REQUEST['title'];
        $date = $_REQUEST['date'];
        $time = $_REQUEST['time'];
        $location = $_REQUEST['option'];
        $des = $_REQUEST['desc'];
    

         

        $sql = "INSERT INTO sch_detail VALUES ('','$title',
            '$date','$time','$location','$des')";
         
         
        if(mysqli_query($conn, $sql)){
            header("Location: ../congo/");

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>