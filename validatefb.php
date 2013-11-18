<?php
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