<?php
session_start();
	$number=	$_SESSION['transaction_number'];
	$price =	$_GET['price'] ;
	$name =		$_SESSION['FULLNAME'] ;
	$email = $_SESSION['email'];
	$place=     $_GET['place'];
	$toplace = $_GET['toplace'];
	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Booking Details</title>
		<link href = "../login/style-register.css" rel= "stylesheet">
		
	<head>
	
	<body>
		<div class = "form">
			<div class="form-1">
				
				<div class = "form-2">
				<form action ="../index-user.php" method = "GET">
					<!--<form action ="index-user.php">-->
					<input type = "text" class ="inputuser" placeholder = " Transaction number: <?php echo $number;?>" readonly />
						<input type = "email" class ="inputuser" placeholder ="Total : <?php echo $price;?>" readonly />
						<input type = "password" class ="inputuser" placeholder ="User name: <?php ECHO $name;?> "readonly />
						<input type = "password" class ="inputuser" placeholder = "Destination: <?php echo $place;?>" readonly />
						<input type = "email" class ="inputuser" placeholder ="From : <?php echo $toplace;?>" readonly />
					<!--</form>-->
					
						<input type = "submit" class ="register" value = "Home" style = "background:rgba(0,150,0,.5); color:white; width:100%; height:40px; border: 1px solid green; margin-top: 10px; cursor:pointer; color: black" />	
					</form>
				</div>
			</div>
		</div>	
	</body>
</html>
		
		