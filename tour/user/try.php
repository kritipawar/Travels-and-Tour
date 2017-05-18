<?php 

session_start();
$username= $_POST['user'];
$password= $_POST['pass'];

$conn = oci_connect('cse_15101014','15101014','172.16.61.126/dbtest');
if (!$conn) {
$e = oci_error();
trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
$query= 'select * from CUSTOMER where EMAILID = \''.$username.'\' and PASSWORD =\''.$password.'\'';
//echo $query;
$stid = oci_parse($conn, $query);
//echo $stid;
$result=oci_execute($stid);
//echo($result);

if(($row = oci_fetch_row($stid)) != false){


$username = $row[0];
header("Location:../user/index-user.php?msg=successfully_logged_in");

//echo "<a href='member.php'>Click</a> here to enter"; 
$_SESSION['FULLNAME'] = $username;
$_SESSION['email'] = $row[1];

oci_close($conn);
}
else {
echo "Wrong Username or Password";
}
?>
<a href = "ticketbook.php"></a>
<a href = "invoice.php"></a>
