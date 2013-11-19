<?php

session_start();
include 'rds_db.php';
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
     if ($_FILES["file"]["error"] > 0) {
        echo "Error: " . $_FILES["file"]["error"] . "<br>";
    } else {
    $bucket = 'bestview-bucket';
    $loc = $_POST['place'];
    $filename = $loc . "_" . $_FILES["file"]["name"];
    $type = $_FILES["file"]["type"];
    $size = $_FILES["file"]["size"];
    $sizebytes = ( $size / 1024) . "kB";
    $tmp = $_FILES["file"]["tmp_name"];
    
    $date = date("Y-m-d");
    //database upload
     $fp = fopen($tmp, 'r');
     $content = fread($fp, $size);
     $content = addslashes($content);
 
     $fileData = file_get_contents($tmp);
     $fhandle = fopen($filename, 'w') or die("Error opening file");
     fwrite($fhandle, $fileData) or die("Error writing to file");
     fclose($fhandle) or die("Error closing file");
     fclose($fp);
     $sql = "INSERT into content VALUES ('" . $loc . "','" . $filename . "','" . $date . "','" . $content . "','" . $type . "')";
        if (!mysql_query($sql)) {
            die('Error: ' . mysql_error());
        } else {
            echo "<script type='text/javascript'>
             alert(\"File Uploaded \");
             </script>";
        }
    
    //create a new bucket
    //move the file
    if ($s3->putObjectFile($tmp, $bucket, $filename, S3::ACL_PUBLIC_READ)) {
        echo "We successfully uploaded your file.";
        header('location: fileupload.php');
    } else {
        echo "Something went wrong while uploading your file... sorry.";
    }
}
}
?>
