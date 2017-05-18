<?php 

session_start();
$place = $_SESSION['place'];
$D = $_SESSION['Total'];
$A = $_SESSION['rand'];
settype($A,integer);

$B = $_SESSION['FULLNAME'];
echo  $place;
echo $B;
$conn = oci_connect('cse_15101014','15101014','172.16.61.126/dbtest');
if (!$conn) {
$e = oci_error();
trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
	//$rand = (rand() . "<br>");
	//echo $rand;
	echo $place;
	$ticket = $place.$A;
	echo $ticket;
	if($B != NULL){
	$query= "INSERT INTO HISTORY VALUES ('$A','$B','$D','NULL','$ticket')";
	$stid = oci_parse($conn, $query);
	$result1 = oci_execute($stid);
	//echo $result1;
	}
header("Location:history.php");
		$_SESSION['transaction_number'] = $A;
		$_SESSION['price'] = $D;
		$_SESSION['FULLNAME'] = $B;
		$_SESSION['place'] = $place;
oci_close($conn);

?>
<a href = "history.php"></a>