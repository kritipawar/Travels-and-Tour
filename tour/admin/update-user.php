<?php
	session_start();
	$customer = $_SESSION['customer-mail'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link href = "../login/style-register.css" rel= "stylesheet">
		
	<head>
	
	<body>
		<div class = "form">
			<div class="form-1"  style = "height:650px; left: 550px">
				
				<div class = "form-2">
					<form action ="update.php" method = "POST">

						<input type = "email" class = "inputuser" name = "fullname" placeholder = "<?php echo $customer; ?>"/>
						<input type = "text" class ="inputuser" placeholder = "Old Full Name" name = "email"/>
						<input type = "text" class ="inputuser" placeholder = "New Full Name" name = "email-new"/>
						
						<input type = "password" class ="inputuser" placeholder ="Old Password" name="pass" required />
						<input type = "password" class ="inputuser" placeholder ="New Password" name="pass-new" required />
						<input type = "password" class ="inputuser" placeholder = "Confirm Password" name ="pass-new1" required />
						
						
						
						<input type = "submit" class ="register" value = "Submit" style = "background:rgba(0,150,0,.5); color:white; width:100%; height:40px; border: 1px solid green; margin-top: 10px; cursor:pointer; color: black" />
						
					</form>
					<a href ="index-admin.php" style= "margin-left:100px; decoration:none; font-family: sans-serif">Home</a>
					
				</div>
			</div>
		</div>	
	</body>
</html>