<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost","root","root");
$db= mysqli_select_db($link,"school");
$querry = "SELECT * from students";
$result = mysqli_query($link,$querry);
$rows= mysqli_num_rows($result);
echo "<table><tr><th>Имя</th>
<th>Номер</th><th>Улица</th>
</tr>";
for ($i=0; $i<$rows ; ++$i)
{
	$row= mysqli_fetch_row($result);
	echo "<tr>";
	for ($j=0; $j<3 ; ++$j)
	echo "<td>$row[$j]</td>";
}
echo "</table>";
?>