<?php 
session_start();
$place = $_GET['place'];
$D = $_GET['Total'];
$A = $_GET['rand'];
$place = $_GET['place'];
$toplace = $_GET['toplace'];
//settype($A,integer);

$B = $_SESSION['FULLNAME'];
//echo $B;

$conn = oci_connect('cse_15101014','15101014','172.16.61.126/dbtest');
if (!$conn) {
$e = oci_error();
trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
else{
	//$rand = (rand() . "<br>");
	//echo $rand;
	echo $place;
	$ticket = $place.$A;
	echo $ticket;
	//$q = 'select id from package where CITY_NAME = '.$'\''
	
	$query= "INSERT INTO HISTORY VALUES ('$A','$B','$D','$place','$ticket')";
	$stid = oci_parse($conn, $query);
	$result1 = oci_execute($stid);
	//echo $result1;
	
header("Location:../mail/mail.php?place=$place&price=$D&toplace=$toplace");
		$_SESSION['transaction_number'] = $A;
		
		$_SESSION['FULLNAME'] = $B;
oci_close($conn);
}

?>