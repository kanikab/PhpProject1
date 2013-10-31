<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        Hi
        <?php
       $uname = $_POST["username"];
       $pwd = $_POST["password"];
       $con = mysql_connect("localhost", "root", "");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        mysql_select_db("297_project", $con);
        $sql = "select * from userdetails where usernme = '".$uname."' and password = '".$pwd."'";
        $result = mysql_query($sql);
        if (!$result)
        {
            echo 'error';
        }
        $row = mysql_numrows($result);
        echo $row;
        ?>
    </body>
</html>
