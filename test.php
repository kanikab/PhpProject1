<<<<<<< HEAD:test.php
<?php
$dir = sys_get_temp_dir();
session_save_path($dir);
session_start();

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Citystory</title>

        <!-- CSS -->
		 <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/slider.css" type="text/css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script src="js/jquery.flexslider-min.js"></script>
                	<link rel="stylesheet" type="text/css" href="../plugin/css/style.css">
    	<link rel="stylesheet" type="text/css" href="css/audio.css">
    	<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    	
		<style>
		 html,body {
	            background: url(images/story.jpg) no-repeat center center fixed;
	            -webkit-background-size: cover; /* For WebKit*/
	            -moz-background-size: cover;    /* Mozilla*/
	            -o-background-size: cover;      /* Opera*/
	            background-size: cover;         /* Generic*/
	        }
                .google_translate{
            display: block;
            top: 5px;
            float: right;    
            background: #fdfdfd;
            border: 1px solid #ccc;

        }
	    </style>
		
    </head>

    <body>
       
        <!-- Navigation -->
       	<div class="container">
	        <!-- Navigation bar -->
	        <nav class="navbar navbar-inner navbar-fixed-top navbar-inverse" role="navigation">
	            <ul class="nav navbar-nav nav-pills">
	                <li><img src="images/logo.jpeg" alt="Citystory" width="100" height="100"></li>
	                <li ><a href="globe.html">Globe</a></li>
	                <li><a href="profile.php">Profile</a></li>
	                <li class="active"><a href="albums.php">Albums</a></li>
	                <li><a href="fileupload.php">Upload</a></li>
	                <li><a href="logoff.php">Sign Off</a></li></ul>
	            <a href="https://www.facebook.com/citystorysf"title="Become a fan"><img src="facebook.jpeg" height="50" width="50"></a>
	        </nav>
	    </div>
        <div id="google_translate_element" class="google_translate"></div>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
        <br><br><br><br><br>
		<script>
		$(document).ready(function () {
			$('.flexslider').flexslider({
				animation: 'fade',
				controlsContainer: '.flexslider'
			});
		});
		</script>
                
                
       
       
    </body>
</html>
<?php
include 'S3.php';
if (!class_exists('S3'))
    require_once('S3.php');

//AWS access info
if (!defined('awsAccessKey'))
    define('awsAccessKey', 'AKIAICNHLOXNYBFVEYFQ');
if (!defined('awsSecretKey'))
    define('awsSecretKey', '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');

//instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey);
$bucket = 'bestview-bucket';
$bucket_contents = $s3->getBucket($bucket);
	echo "<div class=\"flex-container\">";
	 echo "<div class=\"flexslider\">";
foreach ($bucket_contents as $file) {
    $fname = $file['name'];
    $place = split("____", $fname);
    $loc = $_SESSION["location"]; 
    if (strtolower($place[0]) == strtolower($loc)) {
      $furl = "https://bestview-bucket.s3.amazonaws.com/" . $fname;
        //output a link to the file
			       echo "<ul class=\"slides\">";
		           echo "<li>";
			       echo "<img src=\"$furl\"/> </a> </li> </ul>";
    }
}
echo "</div></div>";
?>
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 173d4893eacd3d0a250c90abe9af400ce68912f7
<?php
$dir = sys_get_temp_dir();
session_save_path($dir);
session_start();

<<<<<<< HEAD
echo '<script type=\"text/javascript\">
 $(document).ready(function(){
            
            $(\'.audio_control\').ttwMusicPlayer(myPlaylist, {
            
                autoplay:true, 
                jPlayer:{
                    swfPath:\'/plugin/jquery-jplayer\' //You need to override the default swf path any time the directory structure changes
                }
            });
        });
    	</script>';
=======
>>>>>>> 173d4893eacd3d0a250c90abe9af400ce68912f7
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Citystory</title>

        <!-- CSS -->
		 <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/slider.css" type="text/css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script src="js/jquery.flexslider-min.js"></script>
                	<link rel="stylesheet" type="text/css" href="../plugin/css/style.css">
    	<link rel="stylesheet" type="text/css" href="css/audio.css">
    	<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<<<<<<< HEAD
    	<script type="text/javascript" src="../plugin/jquery-jplayer/jquery.jplayer.js"></script>
    	<script type="text/javascript" src="../plugin/ttw-music-player-min.js"></script>
    	<script type="text/javascript" src="js/myplaylist.js"></script>
=======
>>>>>>> 173d4893eacd3d0a250c90abe9af400ce68912f7
    	
		<style>
		 html,body {
	            background: url(images/story.jpg) no-repeat center center fixed;
	            -webkit-background-size: cover; /* For WebKit*/
	            -moz-background-size: cover;    /* Mozilla*/
	            -o-background-size: cover;      /* Opera*/
	            background-size: cover;         /* Generic*/
	        }
                .google_translate{
            display: block;
            top: 5px;
            float: right;    
            background: #fdfdfd;
            border: 1px solid #ccc;

        }
	    </style>
		
    </head>

    <body>
       
        <!-- Navigation -->
       	<div class="container">
	        <!-- Navigation bar -->
	        <nav class="navbar navbar-inner navbar-fixed-top navbar-inverse" role="navigation">
	            <ul class="nav navbar-nav nav-pills">
	                <li><img src="images/logo.jpeg" alt="Citystory" width="100" height="100"></li>
	                <li ><a href="globe.html">Globe</a></li>
	                <li><a href="profile.php">Profile</a></li>
	                <li class="active"><a href="albums.php">Albums</a></li>
	                <li><a href="fileupload.php">Upload</a></li>
	                <li><a href="logoff.php">Sign Off</a></li></ul>
	            <a href="https://www.facebook.com/citystorysf"title="Become a fan"><img src="facebook.jpeg" height="50" width="50"></a>
	        </nav>
	    </div>
        <div id="google_translate_element" class="google_translate"></div>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
        <br><br><br><br><br>
		<script>
		$(document).ready(function () {
			$('.flexslider').flexslider({
				animation: 'fade',
				controlsContainer: '.flexslider'
			});
		});
		</script>
<<<<<<< HEAD
        <!-- audio control -->        
        <div id = "audio" class = "audio_control"> </div>
    
	<link rel="stylesheet" type="text/css" href="./plugin/css/style.css">
    	<link rel="stylesheet" type="text/css" href="css/audio.css">
    	<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    	<script type="text/javascript" src="./plugin/jquery-jplayer/jquery.jplayer.js"></script>
    	<script type="text/javascript" src="./plugin/ttw-music-player-min.js"></script>
    	<script type="text/javascript" src="js/myplaylist.js"></script>
    	<script type="text/javascript">
        $(document).ready(function(){
            
            $('.audio_control').ttwMusicPlayer(myPlaylist, {
                autoplay:true, 
                jPlayer:{
                    swfPath:'./plugin/jquery-jplayer' //You need to override the default swf path any time the directory structure changes
                }
            });
        });
    	</script>
		<style>
  		#audio {
    		position: fixed;
    		top:30px;
    		left: 0;
    		z-index: 10000000000;
  		}
		</style>
=======
                
                
>>>>>>> 173d4893eacd3d0a250c90abe9af400ce68912f7
       
       
    </body>
</html>
<?php
include 'S3.php';
if (!class_exists('S3'))
    require_once('S3.php');

//AWS access info
if (!defined('awsAccessKey'))
    define('awsAccessKey', 'AKIAICNHLOXNYBFVEYFQ');
if (!defined('awsSecretKey'))
    define('awsSecretKey', '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');

//instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey);
$bucket = 'bestview-bucket';
$bucket_contents = $s3->getBucket($bucket);
	echo "<div class=\"flex-container\">";
	 echo "<div class=\"flexslider\">";
foreach ($bucket_contents as $file) {
    $fname = $file['name'];
    $place = split("____", $fname);
    $loc = $_SESSION["location"]; 
    if (strtolower($place[0]) == strtolower($loc)) {
      $furl = "https://bestview-bucket.s3.amazonaws.com/" . $fname;
        //output a link to the file
			       echo "<ul class=\"slides\">";
		           echo "<li>";
			       echo "<img src=\"$furl\"/> </a> </li> </ul>";
    }
}
echo "</div></div>";
<<<<<<< HEAD
=======
=======
>>>>>>> 173d4893eacd3d0a250c90abe9af400ce68912f7
<?php
$dir = sys_get_temp_dir();
session_save_path($dir);
session_start();

echo '<script type=\"text/javascript\">
 $(document).ready(function(){
            
            $(\'.audio_control\').ttwMusicPlayer(myPlaylist, {
            
                autoplay:true, 
                jPlayer:{
                    swfPath:\'/plugin/jquery-jplayer\' //You need to override the default swf path any time the directory structure changes
                }
            });
        });
    	</script>';
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Citystory</title>

        <!-- CSS -->
		 <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/slider.css" type="text/css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script src="js/jquery.flexslider-min.js"></script>
                	<link rel="stylesheet" type="text/css" href="../plugin/css/style.css">
    	<link rel="stylesheet" type="text/css" href="css/audio.css">
    	<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    	<script type="text/javascript" src="../plugin/jquery-jplayer/jquery.jplayer.js"></script>
    	<script type="text/javascript" src="../plugin/ttw-music-player-min.js"></script>
    	<script type="text/javascript" src="js/myplaylist.js"></script>
    	
		<style>
		 html,body {
	            background: url(images/story.jpg) no-repeat center center fixed;
	            -webkit-background-size: cover; /* For WebKit*/
	            -moz-background-size: cover;    /* Mozilla*/
	            -o-background-size: cover;      /* Opera*/
	            background-size: cover;         /* Generic*/
	        }
                .google_translate{
            display: block;
            top: 5px;
            float: right;    
            background: #fdfdfd;
            border: 1px solid #ccc;

        }
	    </style>
		
    </head>

    <body>
       
        <!-- Navigation -->
       	<div class="container">
	        <!-- Navigation bar -->
	        <nav class="navbar navbar-inner navbar-fixed-top navbar-inverse" role="navigation">
	            <ul class="nav navbar-nav nav-pills">
	                <li><img src="images/logo.jpeg" alt="Citystory" width="100" height="100"></li>
	                <li ><a href="globe.html">Globe</a></li>
	                <li><a href="profile.php">Profile</a></li>
	                <li class="active"><a href="albums.php">Albums</a></li>
	                <li><a href="fileupload.php">Upload</a></li>
	                <li><a href="logoff.php">Sign Off</a></li></ul>
	            <a href="https://www.facebook.com/citystorysf"title="Become a fan"><img src="facebook.jpeg" height="50" width="50"></a>
	        </nav>
	    </div>
        <div id="google_translate_element" class="google_translate"></div>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
        <br><br><br><br><br>
		<script>
		$(document).ready(function () {
			$('.flexslider').flexslider({
				animation: 'fade',
				controlsContainer: '.flexslider'
			});
		});
		</script>
        <!-- audio control -->        
                <div id = "audio" class = "audio_control"> </div>
    
	<link rel="stylesheet" type="text/css" href="./plugin/css/style.css">
    	<link rel="stylesheet" type="text/css" href="css/audio.css">
    	<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    	<script type="text/javascript" src="./plugin/jquery-jplayer/jquery.jplayer.js"></script>
    	<script type="text/javascript" src="./plugin/ttw-music-player-min.js"></script>
    	<script type="text/javascript" src="js/myplaylist.js"></script>
    	<script type="text/javascript">
        $(document).ready(function(){
            
            $('.audio_control').ttwMusicPlayer(myPlaylist, {
                autoplay:true, 
                jPlayer:{
                    swfPath:'./plugin/jquery-jplayer' //You need to override the default swf path any time the directory structure changes
                }
            });
        });
    	</script>
		<style>
  		#audio {
    		position: fixed;
    		top:30px;
    		left: 0;
    		z-index: 10000000000;
  		}
		</style>
       
       
    </body>
</html>
<?php
include 'S3.php';
if (!class_exists('S3'))
    require_once('S3.php');

//AWS access info
if (!defined('awsAccessKey'))
    define('awsAccessKey', 'AKIAICNHLOXNYBFVEYFQ');
if (!defined('awsSecretKey'))
    define('awsSecretKey', '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');

//instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey);
$bucket = 'bestview-bucket';
$bucket_contents = $s3->getBucket($bucket);
	echo "<div class=\"flex-container\">";
	 echo "<div class=\"flexslider\">";
foreach ($bucket_contents as $file) {
    $fname = $file['name'];
    $place = split("____", $fname);
    $loc = $_SESSION["location"]; 
    if (strtolower($place[0]) == strtolower($loc)) {
      $furl = "https://bestview-bucket.s3.amazonaws.com/" . $fname;
        //output a link to the file
			       echo "<ul class=\"slides\">";
		           echo "<li>";
			       echo "<img src=\"$furl\"/> </a> </li> </ul>";
    }
}
echo "</div></div>";
<<<<<<< HEAD









































=======
>>>>>>> c884376e2652b1cc5a87a7d75ca4605d9fa6fe54
?>
>>>>>>> 173d4893eacd3d0a250c90abe9af400ce68912f7
>>>>>>> 7ad54f9c6eb2a7b0f275893bade3da3a5c880024:story.php
