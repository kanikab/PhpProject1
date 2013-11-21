<?php
$dir = sys_get_temp_dir();
session_save_path($dir);
session_start();
ob_start();
include ("rds_db.php");
include("facebook_constants.php");

$users = $facebook->getUser();

if ($users!="") {	
  try {

    $user_profile = $facebook->api('/me');
	$logoutUrl = $facebook->getLogoutUrl();
	$femail=$user_profile["email"];
	$newtoken=base64_encode($fuserid."::".$fusername);
       
 
	$msql = mysql_query("SELECT * FROM users WHERE email='".$femail."'" );

	if(mysql_num_rows($msql)>0){
		$sqlrow=mysql_fetch_object($msql);
                $_SESSION['username'] = $femail;
		header('Location:globe.html'); 
	}
	else{		
		header('Location:register.php?token='.$newtoken);
		exit;
	}

  } catch (FacebookApiException $e) {
    $users = null;
  }
}
?>