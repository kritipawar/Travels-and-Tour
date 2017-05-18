<?php 
session_start();
$email = $_SESSION['email'];
$fullname = $_SESSION['FULLNAME'];
$trans= $_POST['Transaction'];

$conn = oci_connect('cse_15101014','15101014','172.16.61.126/dbtest');
if (!$conn) {
$e = oci_error();
trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
$query= 'select * from history where TRANSACTION_NUMBER = \''.$trans.'\'';
//echo $query;
$stid = oci_parse($conn, $query);
//echo $stid;
$result=oci_execute($stid);
//echo($result);
$row = oci_fetch_row($stid);


$transno = $row[0];
$name = $row[1];
$total = $row[2];


$query1= 'delete from history where TRANSACTION_NUMBER = \''.$trans.'\'';
//echo $query;
$stid1 = oci_parse($conn, $query1);
//echo $stid;
$result1=oci_execute($stid1);
//echo($result);


$query2= 'insert into cancel values( \''.$trans.'\', \''.$name.'\')';
//echo $query;
$stid2 = oci_parse($conn, $query2);
//echo $stid;
$result2=oci_execute($stid2);

$query4= 'select balance from wallet where email_id = \''.$email.'\'  ';
//echo $query;
$stid4 = oci_parse($conn, $query4);
//echo $stid;
$result4=oci_execute($stid4);
$row1 = oci_fetch_row($stid4);


$amount = $row1[0];
$new_amount = $amount + $total; 

$query3= 'update wallet set balance =  \''.$new_amount.'\' where email_id = \''.$email.'\' ';
//echo $query;
$stid3 = oci_parse($conn, $query3);
//echo $stid;
$result3=oci_execute($stid3);



oci_close($conn); 
header("Location:cancelmail.php?transid=$trans");


?>

