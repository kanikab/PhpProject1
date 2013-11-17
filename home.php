<?php

include 'rds_db.php';
	
$qr = "SELECT * FROM globe";

$res= mysql_query($qr);
$i=0;

while($row = mysql_fetch_array($res))
{
$placemark[$i]["latitude"] = $row["latitude"];
$placemark[$i]["longitude"] = $row["longitude"];
$placemark[$i]["name"] = $row["name"];
$i++;
}
 header('Content-type: application/json');
  echo json_encode($placemark);
?>

<!DOCTYPE  html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Best View</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/social-icons.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        	

        <link rel="Stylesheet" type="text/css" href="js/scroller/css/smoothDivScroll.css" />

        <!-- GOOGLE FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  
  <style type="text/css">@import "static/examples.css";</style>
  <style type="text/css">@import "static/prettify/prettify.css";</style>
  <script type="text/javascript" src="static/prettify/prettify.js"></script>
  
  
  <!-- Change the key below to your own Maps API key -->
  <script type="text/javascript" src="http://www.google.com/jsapi?hl=en&amp;key=ABQIAAAAwbkbZLyhsmTCWXbTcjbgbRSzHs7K5SvaUdm8ua-Xxy_-2dYwMxQMhnagaawTo7L1FE1-amhuQxIlXw"></script>
  <script type="text/javascript" src="js/globe_function.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script>
  google.load("earth", "1");
  </script>
        <style>
            .google_earth {
                position: fixed;
                width: 100%;
                height: 100%;
                left: 0;
                z-index: 10;
            }
        </style>
    </head>
    <body onload="if(window.prettyPrint)prettyPrint();init();">
    	
        <!-- Image buttons -->
        <ul id="image-buttons" style = "top:0">
            <li id="close-image" class="poshytip" title="Close image"></li>
            <li id="info-button" class="poshytip" title="Image info"></li>
        </ul>
        <!-- ENDS Image buttons -->

        <!-- Navigation -->
        <div id="nav-wrapper" style = "top:0">
            <ul id="nav" class="sf-menu">
                <li class="current-menu-item"><a href="Globe.html">Globe</a></li>
                <li class="current-menu-item"><a href="login.php">Profile</a></li>
                <li class="current-menu-item"><a href="register.php"></a></li>               
                <li><a href="contact.html">Contact</a></li>
                <li class="social">
                    <!-- Social -->
                    <a href="http://www.facebook.com" class="poshytip  facebook" title="Become a fan"></a>
                    <a href="https://twitter.com" class="poshytip  twitter" title="Follow my tweets"></a>
                    <!-- ENDS Social -->
                </li>			
            </ul>
        </div>
        <!-- Navigation -->
            
    	<div id="map3d" class = "google_earth"></div>
	

   
  </div>

    </body>
</html>