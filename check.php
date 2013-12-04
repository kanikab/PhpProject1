<?php
$dir = sys_get_temp_dir();
session_save_path($dir);
session_start();
	include 'Singleton.php';
	$email = ($_POST['email']);
    $password = ($_POST['password']);

    $query = "SELECT * FROM users WHERE email='$email' AND password=md5('$password')";
 	$sql=$database->query($query);
	$num=$database->numrows($query);
    if($num > 0) {
        $_SESSION["username"]= $email;
	    header("location:globe.html");
        
    }
	else{
                $_SESSION["logonfail"] = true;
				 header("location:home.php");
			
	}
?>