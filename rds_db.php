<?php

$dbName = "aa8ptezdj3amw8.crfsirrnmvve.us-east-1.rds.amazonaws.com:3306";
$dbport = "3306";
$dbTable = "ebdb";
$dbUser = "bestview";
$dbPass = "bestview";

define("HOST", $dbName);
define("DBUSER", $dbUser);
define("PASS", $dbPass);
define("DB", $dbTable);
$conn = mysql_connect(HOST, DBUSER, PASS);
          if($conn)
          {
			if (!mysql_select_db(DB))
			{
die('Could not select Database: '.mysql_error());
			}
          }
       if (!$conn)
         {
       die('Could not connect to Database: '.mysql_error());
        }




?>

