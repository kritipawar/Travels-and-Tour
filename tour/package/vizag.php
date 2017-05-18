<?php 

session_start();
$a1= $_POST['a'];
$conn = oci_connect('cse_15101014','15101014','172.16.61.126/dbtest');
if (!$conn) {
$e = oci_error();
trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$city = array("Raipur","Shimla","Mumbai","Chennai");
foreach ($city as $value):
if($a1 = $value)
{
	$query= 'select train_ticket from PRICE where TO_PLACE = \''.$a1.'\'';
	$stid = oci_parse($conn, $query);
	$result=oci_execute($stid);
	$row = oci_fetch_row($stid);
	
	$query1= 'select others from PRICE where TO_PLACE = \''.$a1.'\'';
	$stid1= oci_parse($conn, $query1);
	$result1=oci_execute($stid1);
	$row2 = oci_fetch_row($stid1);
}
endforeach;

if($row!= false)
{
	$c = $row[0];
	echo $c;
//header("Location:Transaction/index.php"); 
if($row!= false)
{
	$d = $row2[0];
	echo $d;
header("Location:Transaction/index.php"); 
}
$_SESSION['others'] = $d;
$_SESSION['train_ticket'] = $c;
oci_close($conn);
}
else {
echo "Wrong Username or Password";
}
?>
