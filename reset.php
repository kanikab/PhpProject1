<?php
$dir = sys_get_temp_dir();
session_save_path($dir);
session_start();
ob_start();

include 'rds_db.php';

            $pwd = $_POST["pwd"];
            $cpwd = $_POST["cpwd"];
            //$uname = $_SESSION["uname"];
            $uname = "kanikabhtia@gmail.com";
            if (chkpwd($pwd, $cpwd)) {
                $password = md5($pwd);
                $sql = "insert into users(password, email) values('$password', '$uname') on duplicate key update password = '$password'";
                $result = mysql_query($sql);
                if (!$result) {
                    echo 'error';
                } else {
                    echo 'there';
                    $row = mysql_affected_rows();
                    echo $row;
                    if ($row == 2) {
                        echo 'here';
                        echo "<script type='text/javascript'>
                          alert(\"Password Changed. Click on Home page.\");
                        </script>";
                        header('location: index.php');
                    }
                }
            }
 else {
     header('location: pwdreset.php');
 }

        function chkpwd($pwd, $cpwd) {
            $clen = strlen($cpwd);
            $len = strlen($pwd);
            If ($len < 7 || $len > 20 || $clen < 7 || $clen > 20) {
                echo "<script type='text/javascript'>
             alert(\"Password length less than 7 characters or greater than 20 characters\");
             </script>";
                return false;
            }
            if ($pwd == $cpwd) {
                return true;
            } else {
                echo "<script type='text/javascript'>
             alert(\"Password Doesnot Match\");
             </script>";
                return false;
            }
        }

?>
