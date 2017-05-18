<?php 

session_start();
$category=$_POST['admin-category'];
$cust_name=$_POST['customer-mail'];
//include("db_connect.php");
$conn = oci_connect('cse_15101014','15101014','172.16.61.126/dbtest');
if (!$conn) {
$e = oci_error();
trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

		if($category == 'view-customer-history'){
				$query= 'select * from history where CUSTOMER_NAME = \''.$cust_name.'\'';
				//echo $query;
				$stid = oci_parse($conn, $query);
				//echo $stid;
				$result=oci_execute($stid);
				//echo($result);

				echo "<table border = '1'>\n";
				while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
					
					
				echo "<tr>\n";
				
				foreach ($row as $item) {
					echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
				}
				echo "</tr>\n";
				}
				echo "</table>\n";
				echo "<a href='index-admin.php'>Click</a> here to enter";
				//header("Location:index-user.php?msg=successfully_logged_in");

				//echo "<a href='member.php'>Click</a> here to enter";  

				oci_close($conn);
				}
		
		if($category == 'update-customer-details'){
				

				//echo "<a href='member.php'>Click</a> here to enter"; 
				$_SESSION['customer-mail'] = $cust_name;
				header("Location:update-user.php");
				}
		
		if($category == 'view-wallet'){
				$query= 'select * from wallet where email_id = \''.$cust_name.'\'';
				//echo $query;
				$stid = oci_parse($conn, $query);
				//echo $stid;
				$result=oci_execute($stid);
				//echo($result);

				if(($row = oci_fetch_row($stid)) != false){

				$username=$row[2];
				$money = $row[4];
				echo "<p>$money</p>";
				echo "<p>$username</p>";

				echo "<a href='index-admin.php'>Click</a> here to enter"; 
				$_SESSION['cust-name'] = $username;
				$_SESSION['customer-wallet'] = $money;
				

				oci_close($conn);
				}
		}
		if($category == 'view-customers'){
				$query= 'select * from customer';
				//echo $query;
				$stid = oci_parse($conn, $query);
				//echo $stid;
				$result=oci_execute($stid);
				//echo($result);
				echo "<table border = '1px'>\n";
				echo "<tr>\n";
						echo "<td>\n";
							echo "Full Name";
						echo "</td>\n";
						echo "<td>\n";
							echo "Email id";
						echo "</td>\n";
						echo "<td>\n";
							echo "Password";
						echo "</td>\n";
				echo "</tr>\n";

				while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
					
					
				echo "<tr>\n";
				
				foreach ($row as $item) {
					echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
				}
				echo "</tr>\n";
				}
				echo "</table>\n";
				echo "<a href='index-admin.php'>Click</a> here to enter";
		}

?>