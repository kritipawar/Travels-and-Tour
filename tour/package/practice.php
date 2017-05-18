<?php 

$a1= $_POST['a'];
$place = "Delhi";
$conn = oci_connect('cse_15101014','15101014','172.16.61.126/dbtest');
if (!$conn) {
$e = oci_error();
trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
$city = array("Raipur","Shimla","Mumbai","Chennai");
echo $a1;
foreach ($city as $value):
//echo $a1;	
	if($value == $a1)
	{
		$query1 ='select train_ticket from PRICE where TO_PLACE =\''.$a1.'\''; 
		$stid1= oci_parse($conn, $query1);
		$result1= oci_execute($stid1);
		$row1 = oci_fetch_row($stid1);
		
		$query2= 'select others from PRICE where TO_PLACE = \''.$a1.'\'';
		$stid2= oci_parse($conn, $query2);
		$result2=oci_execute($stid2);
		$row2 = oci_fetch_row($stid2);
		
		$query3= 'select discount from PRICE where TO_PLACE = \''.$a1.'\'';
		$stid3= oci_parse($conn, $query3);
		$result3=oci_execute($stid3);
		$row3 = oci_fetch_row($stid3);
		
		if($row1!= false)
		{
		$c = $row1[0];
		echo $c;
		//header("Location:Transaction/index.php"); 
		if($row2!= false)
		{
		$d = $row2[0];
		echo $d;
		if($row3!= false)
		{
		$f = $row3[0];
		echo $f;
		}
		}
		}
	echo $place;
oci_close($conn);
		}
		
	endforeach;	
	header("Location:../Transaction/index.php?ticket=$c&others=$d&place=$place&toplace=$a1&discount=$f"); 	
	
//endforeach;

?>
<!--<a href = '../transaction/index.php?ticket = $c & others = $-->
