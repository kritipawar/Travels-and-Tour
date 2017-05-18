<?php
		session_start();
		$username = $_POST['user'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$password2 = $_POST['pass2'];
		$address = $_POST['add'];
		
		$conn = oci_connect('cse_15101014','15101014','172.16.61.126/dbtest');
			if (!$conn) 
				{
					$e = oci_error();
					trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
				}
		
		if($password == $password2)
		{
			$password = $password;
			$stid1 = oci_parse($conn, 'Select EMAILID from customer where EMAILID = \''.$email.'\' ');
			//echo "<p>$stid1</p>";
			
			oci_execute($stid1);
			$row = oci_fetch_row($stid1);
			IF($row[0]==$email){
				echo"ACCOUNT already exists";
			}
			else{
				$sql = "INSERT INTO customer values('$username','$email','$password','$address')";
			$stid = oci_parse($conn, $sql);
			$result=oci_execute($stid);
				header("Location:../login/logout.php?msg=successfully_logged_in");
			//echo "success"; 
			//$_SESSION['EMAILID'] = 
			$_SESSION['FULLNAME'] = $username;
			}
		}else
		{
			echo "password is not same";
		}
		oci_close($conn);		
?>
