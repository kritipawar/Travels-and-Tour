<!DOCTYPE html>
<?php

	session_start();
	$c1 = $_SESSION['name'][0];
	$c2 = $_SESSION['name'][1];
	$c3 = $_SESSION['name'][2];
	$a1 = $_SESSION['amount'][0];
	$a2 = $_SESSION['amount'][1];
	$a3 = $_SESSION['amount'][2];
?>
<html>
	<head>
		<title>Train Details</title>
		<link href = "../login/style-register.css" rel= "stylesheet">
		<a href = "train-transaction.php"></a>
	<head>
	
	<body>
	
		<div class = "form">
		<h2 style = "font-family:sans-serif; color:rgb(0,0,0);margin-left: 10%; margin-top: 20%"> “We travel, some of us forever, <br/>to seek other places,<br/> other lives, other souls.” – Anais Nin</h2>
			<div class="form-1">
			
				
				<div class = "form-2">
						<p style = "margin-left:100px; font-family:sans-serif;font-size:23px"> Total Trains Available</p>			
					<table style="margin-left: 25%; margin-top: 25%; border-spacing = 5em;">
					<form action ="../Transaction/traintran.php" method = "POST">
					<tr>
					<td><h4><?php echo $c1;?>  <?php echo $a1;?></h4></td>
					<td><button>Book</button></td>
					</tr>
					</form>
					
					
					<form action ="ticket.php" method = "POST">
					<tr>
					<td><h4><?php echo $c2;?>  <?php echo $a2;?></h4></td>
					<td><button type="submit">Book</button></td>
					</tr>
					</form>
					<form action ="ticket.php" method = "POST">
					<tr>
					<td><h4><?php echo $c3;?> <?php echo $a3;?></h4></td>
					<td><button>Book</button></td>
					</tr>
					</form>
					</table>
					<a href="../index-user.php"><button>Home</button></a>
					
				</div>
			</div>
		</div>	
	</body>
</html>
	