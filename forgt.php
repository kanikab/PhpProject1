<?php
    ob_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <?php
    
        //$uname = $_POST["username"];
        $uname = "bhatia_kanika@ymail.com";
        $page = 'index.html';
        $con = mysql_connect("localhost", "root", "");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        mysql_select_db("297_project", $con);
       $sql = "select * from userdetails where usernme = '".$uname."'";
        $result = mysql_query($sql);
        if (!$result) {
            echo 'error';
        } 
        else {
        $row = mysql_numrows($result);
        if($row == 1){
            echo '1';
            header('Location: '.$page);
            //header("Location: $index.html");
          exit;
        }
        echo '2';
        }
        echo '3';
        ?>
    </body>
</html>