
<?php 
session_start();
$card= $_POST['card_number'];
$security= $_POST['security'];
$name= $_POST['name'];
$expiry= $_POST['expiry'];
$B= $_SESSION['amount'][0];
echo $B;
$conn = oci_connect('cse_15101014','15101014','172.16.61.126/dbtest');
if (!$conn) {
$e = oci_error();
trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
$query= 'select BALANCE from WALLET where CARD_NUMBER = \''.$card.'\' and SECURITY =\''.$security.'\' and EXPIRY_DATE = \''.$expiry.'\' and EMAIL_ID=\''.$name.'\'';
$stid = oci_parse($conn, $query);
$result=oci_execute($stid);
//echo $result;

if(($row = oci_fetch_row($stid))!=false){
	$c = $row[0];
	$E = $c-$B;
	//echo $E;
	if($c>$B){
		$query2 = 'update WALLET set BALANCE =\''.$E.'\' where CARD_NUMBER = \''.$card.'\' and SECURITY =\''.$security.'\' and EXPIRY_DATE = \''.$expiry.'\' and EMAIL_ID =\''.$name.'\'';
		$stid1 = oci_parse($conn, $query2);
		$result1=oci_execute($stid1);
		echo $result1;
		$row = oci_fetch_row($stid);
		//echo $row[0];
		
	}
$rand = (rand() . "<br>");

header("Location:train-invoice.php");
$_SESSION['Total'] = $B;
$_SESSION['BALANCE'] = $c;	
$_SESSION['rand'] = $rand;
oci_close($conn);
}
else {
echo "Wrong Username or Password";
}
?>
<!DOCTYPE html >
<html>
<head>
<a href = "train-invoice.php"></a>
</head>
<body>
</body>
</html>
