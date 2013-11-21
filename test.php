<?php 
include 'rds_db.php';
$pwd = "hi";
$uname = "test";
 $sql = "UPDATE users SET password= '" . md5($pwd) . "' where email = '" . $uname . "'";
                $result = mysql_query($sql);
                 if (!$result) {
                    echo mysql_error();
                } else {
                echo $result;}
?>