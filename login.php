

<html>
<head>
	<link rel="stylesheet" href="css/login_responsive.css">

	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../cloud_ass/css/login.css">

</head>

<body>
	
	<div class="box2">
		<div class="loginbox">
		<br>
		<center><h3>Login</h3></center>
		<hr>
		
        <div class="user">
         <img src="../cloud_ass/images/user_image.png" width="200" height = "180">   
        </div>
        
		
        <form name='f1' class="login" action='authentication.php' onsubmit="return validation()" method='POST'>
		<center>
		<p>UserName:<p>
		<input type="text" name="user" placeholder="user123" autocomplete="off">
		<br>
		
		<p>Password:</p>
		<input type="password" name="pass" placeholder="12345" autocomplete="off">
		<br>
		<br>
        <br>
		<input type="submit" class="button" value="Login"><br>
		</center>
        </form>
		</div>
	</div>
	
	<script>  
		function validation()  
		{  
			var id=document.f1.user.value;  
			var ps=document.f1.pass.value;  
			if(id.length=="" && ps.length=="") {  
				alert("User Name and Password fields are empty");  
				return false;  
			}  
			else  
			{  
				if(id.length=="") {  
					alert("User Name is empty");  
					return false;  
				}   
				if (ps.length=="") {  
				alert("Password field is empty");  
				return false;  
				}  
			}                             
		}  
	</script>  


</body>

</html>