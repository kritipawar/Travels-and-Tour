<?php 
session_start();

$a1= $_POST['a'];
$place = "Delhi";
$conn = oci_connect('cse_15101014','15101014','172.16.61.126/dbtest');
if (!$conn) {
$e = oci_error();
trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
//$city = array("Raipur","Shimla","Mumbai","Chennai");
//foreach ($city as $value):
	
	if($a1 = "Shimla" or $a1 = "shimla")
	{
		$query1 ='select train_ticket from PRICE where TO_PLACE =\''.$a1.'\''; 
		$stid1= oci_parse($conn, $query1);
		$result1= oci_execute($stid1);
		$row1 = oci_fetch_row($stid1);
		
		$query2= 'select others from PRICE where TO_PLACE = \''.$a1.'\'';
		$stid2= oci_parse($conn, $query2);
		$result2=oci_execute($stid2);
		$row2 = oci_fetch_row($stid2);
	}
	elseif($a1 = "Raipur" or $a1 = "raipur" )
	{
		$query1 ='select train_ticket from PRICE where TO_PLACE =\''.$a1.'\''; 
		$stid1= oci_parse($conn, $query1);
		$result1= oci_execute($stid1);
		$row1 = oci_fetch_row($stid1);
		
		$query2= 'select others from PRICE where TO_PLACE = \''.$a1.'\'';
		$stid2= oci_parse($conn, $query2);
		$result2=oci_execute($stid2);
		$row2 = oci_fetch_row($stid2);
	}
	elseif($a1 = "mumbai" or $a1 = "Mumbai")
	{
		$query1 ='select train_ticket from PRICE where TO_PLACE =\''.$a1.'\''; 
		$stid1= oci_parse($conn, $query1);
		$result1= oci_execute($stid1);
		$row1 = oci_fetch_row($stid1);
		
		$query2= 'select others from PRICE where TO_PLACE = \''.$a1.'\'';
		$stid2= oci_parse($conn, $query2);
		$result2=oci_execute($stid2);
		$row2 = oci_fetch_row($stid2);
	}
	elseif($a1 = "Chennai" or $a1 = "chennai")
	{
		$query1 ='select train_ticket from PRICE where TO_PLACE =\''.$a1.'\''; 
		$stid1= oci_parse($conn, $query1);
		$result1= oci_execute($stid1);
		$row1 = oci_fetch_row($stid1);
		
		$query2= 'select others from PRICE where TO_PLACE = \''.$a1.'\'';
		$stid2= oci_parse($conn, $query2);
		$result2=oci_execute($stid2);
		$row2 = oci_fetch_row($stid2);
	}
	
//endforeach;
if($row1!= false)
{
	$c = $row1[0];
	echo $c;
//header("Location:Transaction/index.php"); 
if($row2!= false)
{
	$d = $row2[0];
	echo $d;
//header("Location:Transaction/index.php"); 
}
$_SESSION['others'] = $d;
$_SESSION['delhi'] = $place;
$_SESSION['train_ticket'] = $c;
echo $place;
oci_close($conn);
}
else {
echo "Wrong Username or Password";
}
?>
<!--<a href = "invoice.php"></a>-->
