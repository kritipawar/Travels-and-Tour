<?php 

session_start();
$oldmail= $_POST['email'];
$newmail= $_POST['email-new'];
$oldpass=$_POST['pass'];
$newpass=$_POST['pass-new'];
$newpassconf=$_POST['pass-new1'];
$fullname = $_POST['fullname'];
//include("db_connect.php");
$conn = oci_connect('cse_15101014','15101014','172.16.61.126/dbtest');
if (!$conn) {
$e = oci_error();
trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


$query= 'select * from CUSTOMER where password = \''.$oldpass.'\' and emailid = \''.$fullname.'\'';
//echo $query;
$stid = oci_parse($conn, $query);
//echo $stid;
$result=oci_execute($stid);
//echo($result);

if((($row = oci_fetch_row($stid)) != false) && ($newpass == $newpassconf)){


$query1= 'update CUSTOMER set fullname = \''.$newmail.'\', password = \''.$newpass.'\' where emailid = \''.$fullname.'\'';
//echo $query;
$stid1 = oci_parse($conn, $query1);
//echo $stid;
$result1=oci_execute($stid1);

echo "Success";
header("Location:index-admin.php");
oci_close($conn);
}


//echo($result);


else {
echo "Wrong Password";
}


?>