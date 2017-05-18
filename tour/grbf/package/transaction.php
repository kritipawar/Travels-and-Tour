
<?php 
$card= $_POST['card_number'];
$security= $_POST['security'];
$name= $_POST['name'];
$expiry= $_POST['expiry'];

$B= $_GET['others'];
$A= $_GET['ticket1'];
$place =$_GET['place'];
$toplace = $_GET['toplace'];

echo $A;
echo $B;
echo $place;

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
	//echo "<p>$c</p>";
	$D = $A+$B;
	//echo $D;
	$E = $c-$D;
	//echo $E;
	if($c>$D){
		$query2 = 'update WALLET set BALANCE =\''.$E.'\' where CARD_NUMBER = \''.$card.'\' and SECURITY =\''.$security.'\' and EXPIRY_DATE = \''.$expiry.'\' and email_id =\''.$name.'\'';
		$stid1 = oci_parse($conn, $query2);
		$result1=oci_execute($stid1);
		//echo $result1;
		$row = oci_fetch_row($stid);
		//echo $row[0];
		
	}


$rand = uniqid();
	//echo "<p>$rand</p>";
//echo(rand(10,10000)); 
header("Location:invoice.php?rand=$rand&Total=$D&place=$place&toplace=$toplace");

$_SESSION['BALANCE'] = $c;	

oci_close($conn);
}
else {
echo "Wrong Username or Password";
}
?>


