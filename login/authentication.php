<?php      
    include('../conn.php');  
    session_start();
    $username = $_POST['username'];  
    $password = $_POST['password'];  




        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from users where username = '$username' and password = '" . md5($password) . "'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location: ../");
            
        }  
        else{  
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        }     
?> 


