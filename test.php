 <?php 
                $con = mysql_connect("localhost", "root", "");
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("297_project", $con);
    $sql = "select * from content";
    $result = mysql_query($sql);


//echo $username;
while($row = mysql_fetch_array($result))
{
    $img = $row['content'];
    header('Content-type: audio/mp3');
    print $img;
}

                ?>