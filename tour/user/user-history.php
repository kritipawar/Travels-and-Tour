<?php
session_start();
$A = $_SESSION['FULLNAME'];

$conn = oci_connect('cse_15101014', '15101014', '172.16.61.126/dbtest');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT * FROM history where CUSTOMER_NAME = \''.$A.'\'');
oci_execute($stid);
echo "<p style = 'margin-left:450px; margin-top:50px;'>User History</p>";
echo "<table border='1' style = 'margin-left:500px; margin-top:100px;'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?>