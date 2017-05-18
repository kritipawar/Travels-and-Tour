<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link href = "style-register.css" rel= "stylesheet">
		
	<head>
	
	<body>
		<div class = "form">
			<div class="form-1" style = "height: 560px">
				
				<div class = "form-2">
					<form action = 'register1.php' method = "POST">

					<input type = "text" class ="inputuser" placeholder = "Full Name" name = "user" required />
						<input type = "email" class ="inputuser" placeholder = "Email" name = "email" required />
						<input type = "password" class ="inputuser" placeholder ="Password" name="pass" required />
						<input type = "password" class ="inputuser" placeholder = "Confirm Password" name ="pass2" required />
						<input type = "text" class ="inputuser" placeholder = "Address" name = "add" required />
						
						
						
						<input type = "submit" class ="register" value = "Register" style = "background:rgba(0,150,0,.5); color:white; width:100%; height:40px; border: 1px solid green; margin-top: 10px; cursor:pointer; color: black" />
						
					</form>
					<p style = "font-family:sans-serif; color:rgb(0,150,0);font-size:12px; margin-left: 50px; margin-top: 0">Already have an account?<a href ="../index.php" style= "text-align:right"><button id ="sign-up" value = "Home">Home</button></a></p>
					
				</div>
			</div>
		</div>	
	</body>
</html>
		
		