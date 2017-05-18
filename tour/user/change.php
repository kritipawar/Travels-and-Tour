<?php 

session_start();
$oldpass=$_POST['pass'];
$newpass=$_POST['pass1'];
$newpassconf=$_POST['pass2'];
$mail = $_SESSION['email'];
//include("db_connect.php");
$conn = oci_connect('cse_15101014','15101014','172.16.61.126/dbtest');
if (!$conn) {
$e = oci_error();
trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


$query= 'select * from CUSTOMER where password = \''.$oldpass.'\' and emailid = \''.$mail.'\'';
//echo $query;
$stid = oci_parse($conn, $query);
//echo $stid;
$result=oci_execute($stid);
//echo($result);

if((($row = oci_fetch_row($stid)) != false) && ($newpass == $newpassconf)){


$query1= 'update CUSTOMER set password = \''.$newpass.'\' where password = \''.$oldpass.'\' and emailid = \''.$mail.'\'';
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