<?php

include 'rds_db.php';
	
$qr = "SELECT * FROM globe";

$res= mysql_query($qr);
$i=0;

while($row = mysql_fetch_array($res))
{
$placemark[$i]["latitude"] = $row["latitude"];
$placemark[$i]["longitude"] = $row["longitude"];
$placemark[$i]["name"] = $row["name"];
$i++;
}
 header('Content-type: application/json');
  echo json_encode($placemark);
?>
