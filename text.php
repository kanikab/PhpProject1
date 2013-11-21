<?php
$dir = sys_get_temp_dir();
session_save_path($dir);
session_start();

$lat = $_GET['lat'];
$lon = $_GET['lon'];

include_once("rds_db.php");

$sql = "SELECT * FROM globe WHERE latitude >= $lat-0.001 AND latitude <= $lat+0.01 AND longitude >= $lon - 0.01 AND longitude <= $lon + 0.01 ";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$placemark["name"]= $row["name"];
if(!$row) {
    echo "This is your current location, and no record yet. But record within a range will be shown" . "<br/>";
    $sql = "SELECT * FROM globe WHERE latitude >= $lat-5 AND latitude <= $lat+5 AND longitude >= $lon - 5 AND longitude <= $lon + 5 ";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    $placemark["name"]= $row["name"];
    //exit;
}
$_SESSION["location"] = $placemark["name"];
header('Location: story.php');
?>
