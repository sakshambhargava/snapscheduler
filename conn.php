<?php      
    $host = "mysql";  
    $user = "u864599893_root";  
    $password = 'Root@456';  
    $db_name = "u864599893_snap";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
    
    
?>  


