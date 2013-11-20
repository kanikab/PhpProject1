<?php
  session_start();
  include 'rds_db.php';
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);
    
    $result = mysql_query("SELECT * FROM users WHERE email='$email' AND password=md5('$password')");
    echo $result;
    if(mysql_num_rows($result) > 0) {
        $_SESSION["username"]= $email;
        echo hi.$_SESSION["username"];
        $_SESSION["name"]= $result['name'];
        echo bi.$_SESSION["name"];
        //header("location:globe.html");
    }
	else{
                $_SESSION["logonfail"] = true;
                echo there.$_SESSION["logonfail"];
		 //header("location:home.php");
	}
?>