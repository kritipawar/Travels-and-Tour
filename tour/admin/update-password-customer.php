<?php 

session_start();
$oldpass=$_POST['old'];
$newpass=$_POST['new'];
$newpassconf=$_POST['newconf'];
//include("db_connect.php");
$conn = oci_connect('cse_15101014','15101014','172.16.61.126/dbtest');
if (!$conn) {
$e = oci_error();
trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


$query= 'select * from CUSTOMER where password = \''.$oldpass.'\'';
//echo $query;
$stid = oci_parse($conn, $query);
//echo $stid;
$result=oci_execute($stid);
//echo($result);

if((($row = oci_fetch_row($stid)) != false) && ($newpass == $newpassconf)){


$query1= 'update CUSTOMER set password = \''.$newpass.'\' where password = \''.$oldpass.'\'';
//echo $query;
$stid1 = oci_parse($conn, $query1);
//echo $stid;
$result1=oci_execute($stid1);

echo "Success";
echo "<a href='index-user.php'>Click</a> here to enter";
oci_close($conn);
}


//echo($result);


else {
echo "Wrong Old Password";
}


?>