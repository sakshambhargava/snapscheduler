<?php
    $host='mysql';
    $username='u864599893_root';
    $password='Root@456';
    $dbname = "u864599893_snap";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>