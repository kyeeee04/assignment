<?php      
    include('connection.php');  
session_start();
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
    $location1 = "index.php";
    $location2 = "login.php";
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";
            echo"<script>window.location.href='$location1';</script>";
        }  
        else{  
             
            die("<script>alert('Wrong Username or Password');
	        window.location.href='$location2';</script>");
        }    
        
?> 