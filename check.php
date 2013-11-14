<?php
  session_start();
	$server = "127.0.0.1";
	$username = "root";
	$password = "{2235}";
	$database = "cmpe297";



  if($_SERVER['REQUEST_METHOD'] == "POST") {
	$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());
	mysql_select_db($database, $con) or die( "Unable to connect to database");
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);
    $result = mysql_query("SELECT * FROM users WHERE email='$email' AND password=md5('$password')");

    if(mysql_num_rows($result) > 0) {
      header("location:json.html");
    }
	else{
            $_SESSION["username"]= $email;
            $_SESSION["name"]= $result['name'];
		 header("location:index.html");
	}
  }
?>