<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>実習２</title>
</head>
<body>
<h2>実習２</h2>
<table border='1'>


<?php
$gyou = $_GET["gyousu"];
$retsu = $_GET["ressu"];

echo "<tr style='background-color:#99FF99'>";
echo "<td></td>";

for( $i=1; $i<="$retsu"; $i++ ){
echo "<td> {$i} </td>"; 
}
echo "</tr>";


for( $i=1; $i<="$gyou"; $i++ ){
echo "<tr><td style='background-color:#99FF99'> {$i} </td>";
for( $j=1; $j<="$retsu"; $j++ ){
$atai = $i*$j; 
echo "<td> {$atai} </td>";
}


echo "</tr>";
}
?>
</table>
</body>
</html> 