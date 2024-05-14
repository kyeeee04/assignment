<?php      
    $host = "dbcloud.c7wwkwa42vk1.us-east-1.rds.amazonaws.com";  
    $user = "admin";  
    $password = 'nbusernbuser';  
    $db_name = "login";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  