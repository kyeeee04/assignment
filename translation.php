
<?php
session_start();
unset($_SESSION["cart_item"]);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful Page</title>
    <link rel="stylesheet" href="css/login_responsive.css">
    <link rel="stylesheet" type="text/css" href="../cloud_ass/css/login.css">



</head>

<body>
    <div class="box2">
        <div class="loginbox">
            <br>
            <center><h3>Yay Payment Sucessful! Xie Xie Laoban!</h3></center> 
            <hr>
            
           
            <div class="3q_png"><img src="images/3q.png" alt="3Q Image" width="400" height="400"></div>


            <form action="cart.php" method="post" >
                <center>
                    <input type="submit" class="button" value="GO BACK"><br>
                </center>
                

        </div>
    </div>
</body>
</html>
