<?php
$a = $_POST['search'];

$conn = oci_connect('cse_15101014','15101014','172.16.61.126/dbtest');
if (!$conn) 
{
$e = oci_error();
trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
} 
$sql = 'SELECT * FROM DESTINATION WHERE CITY =\''.$a.'\'';
$stid = oci_parse($conn, $sql);
$result=oci_execute($stid);
if(($row = oci_fetch_row($stid)) != false)
{
//$username = $row[1];
echo "welcome!!";


//echo "<a href='member.php'>Click</a> here to enter"; 
//$_SESSION['user_name'] = ''.$username.'';
//echo "hjgjhgjy";
if($a=='Kashmir')
{
header("Location:kashmir.php");
}
else
{
echo "Sorry";
}
}
oci_close($conn);


?>