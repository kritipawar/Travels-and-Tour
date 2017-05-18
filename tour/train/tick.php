
<?php
session_start();
$a = $_POST['from'];
$b = $_POST['to'];
$c = $_POST['date'];
$conn = oci_connect('cse_15101014','15101014','172.16.61.126/dbtest');
if (!$conn) 
{
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
		$sql1 = 'SELECT * FROM TICKET WHERE FROM_PLACE = \''.$a.'\' AND TO_PLACE = \''.$b.'\' and T_DATE = \''.$c.'\'';
		$stid1 = oci_parse($conn, $sql1);
		$result1=oci_execute($stid1);
		$row = oci_fetch_row($stid1);
		
		$sql2 = 'SELECT name FROM TRAIN_NAME WHERE TICKET_ID = \''.$row[2].'\'';
		$stid2 = oci_parse($conn, $sql2);
		$result2 = oci_execute($stid2);

			$f = $row[1];
		//echo "<table border='1' style='margin-left:500px; background:aqua;'>\n";
		$c=array();
		while ($row2 = oci_fetch_array($stid2, OCI_ASSOC+OCI_RETURN_NULLS)) {
			//echo "<tr>\n";
			foreach ($row2 as $item) {
				//echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
								$c[]=$item;
								
				//print"<td><button>Book</button></td>\n";
				}
				//echo "</tr>\n";
		}
		//echo "</table>\n";
		//echo $c[1];
	//print_r $c;
		$_SESSION['name'] = $c;
		
		$sql3 = 'SELECT amount FROM TRAIN_NAME WHERE TICKET_ID = \''.$row[2].'\'';
		$stid3 = oci_parse($conn, $sql3);
		$result3 = oci_execute($stid3);

		//echo "<table border='1' style='margin-left:500px; background:aqua;'>\n";
		$d=array();
		while ($row3 = oci_fetch_array($stid3, OCI_ASSOC+OCI_RETURN_NULLS)) {
			//echo "<tr>\n";
			foreach ($row3 as $item) {
				//echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
								$d[]=$item;
								
				//echo "    <td style = 'background: gray;'><button>Book</button></td>\n";
				}
				//echo "</tr>\n";
		}
		//echo "</table>\n";
		//echo $d[1];
	//print_r $c;
		$_SESSION['amount'] = $d;
		$_SESSION['place'] = $f;
header("Location:a.php");
oci_close($conn);
?>
<a href = "train-invoice.php"></a>
		
		