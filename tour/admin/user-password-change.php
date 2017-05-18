<!DOCTYPE html>
<html>
	<head>
		<title>Password Change</title>
		<link href = "login/style-register.css" rel= "stylesheet">
		
	<head>
	
	<body >
		<div class = "form">
			<div class="form-1" style = "height:400px; left: 550px">
				
				<div class = "form-2">
					<form action ="update-password-customer.php" method = "POST">

					<input type = "text" class ="inputuser" placeholder = "Old Password" name = "old" required />
					<input type = "text" class ="inputuser" placeholder = "New Password" name = "new" required />
					<input type = "text" class ="inputuser" placeholder = "Confirm Password" name = "newconf" required />
						
						
						<input type = "submit" class ="register" value = "Submit" style = "background:rgba(0,150,0,.5); color:white; width:100%; height:40px; border: 1px solid green; margin-top: 10px; cursor:pointer; color: black" />
						
					</form>
					<a href ="index-user.php" style= "text-align:right"><button id ="sign-up">Home</button></a>
					
				</div>
			</div>
		</div>	
	</body>
</html>