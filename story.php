<?php

session_start();

include 'S3.php';
if (!class_exists('S3')) require_once('S3.php');

//AWS access info
if (!defined('awsAccessKey'))
    define('awsAccessKey', 'AKIAICNHLOXNYBFVEYFQ');
if (!defined('awsSecretKey'))
    define('awsSecretKey', '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');

//instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey);
$bucket = 'bestview-bucket';
    $bucket_contents = $s3->getBucket($bucket);

foreach ($bucket_contents as $file){

    $fname = $file['name'];
    $place= split ("_", $fname);
    $place= $place[0];
    echo $place;
    $furl = "https://bestview-bucket.s3.amazonaws.com/".$fname;
    
    //output a link to the file
    echo "<img src = \"$furl\">";
    //echo "<a href=\"$furl\">$fname</a><br />";
}
?>
