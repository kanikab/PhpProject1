<?php


$lat = $_GET['lat'];
$lon = $_GET['lon'];

echo $lat."<br/>";
echo $lon."<br/>";


include_once("rds_db.php");

$sql = "SELECT * FROM globe WHERE latitude = $lat AND longitude = $lon";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$placemark["name"]= $row["name"];
echo $placemark["name"]."<br/>";

if(!$row) {
    echo "This is your current location, and no record yet. But record within a range will be shown" . "<br/>";
    $sql = "SELECT * FROM globe WHERE latitude >= $lat-5 AND latitude <= $lat+5 AND longitude >= $lon - 5 AND longitude <= $lon + 5 ";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    $placemark["name"]= $row["name"];
    echo $placemark["name"]."<br/>";
    exit;
}

?>