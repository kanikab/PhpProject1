<?php

session_start();

include 'S3.php';
if (!class_exists('S3'))
    require_once('S3.php');

//AWS access info
if (!defined('awsAccessKey'))
    define('awsAccessKey', 'AKIAICNHLOXNYBFVEYFQ');
if (!defined('awsSecretKey'))
    define('awsSecretKey', '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');

//instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey);
if (isset($_POST['Submit'])) {
    upload($s3);
}

function upload($s3) {
    $bucket = 'bestview-bucket';
    $loc = $_POST['place'];
    $filename = $loc . "_" . $_FILES["file"]["name"];
    $type = $_FILES["file"]["type"];
    $size = $_FILES["file"]["size"];
    $tmp = $_FILES["file"]["tmp_name"];

    //create a new bucket
//move the file
    if ($s3->putObjectFile($tmp, $bucket, $filename, S3::ACL_PUBLIC_READ)) {
        echo "We successfully uploaded your file.";
    } else {
        echo "Something went wrong while uploading your file... sorry.";
    }
}

?>
