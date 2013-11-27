<?php
$dir = sys_get_temp_dir();
session_save_path($dir);
session_start();
ob_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="google-translate-customization" content="dd6dc8d31eae27c9-1af41dda936d789b-g8a2fe6bb665c9411-1d"></meta>

        <title>Citystory</title>

        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/slider.css" type="text/css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script src="js/jquery.flexslider-min.js"></script>
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
                    <li ><a href="profile.php">Profile</a></li>
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
include 'rds_db.php';
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
$sql = "select name from content";
$result = mysql_query($sql);
if (!$result) {
    die('Error: ' . mysql_error());
} else {
   
    while ($row = mysql_fetch_array($result)) {
   
        $name = split("____", $row['name']);
        if ($name[0] == $_SESSION['username']) {
                 foreach ($bucket_contents as $file) {
                $fname = $file['name'];
                $names = split("____", $fname);
                if ($names[1] == $name[1]) {
                    $furl = "https://bestview-bucket.s3.amazonaws.com/" . $fname;
                    //output a link to the file
                    echo "<img src = \"$furl\">";
                    //echo "<a href=\"$furl\">$fname</a><br />";
                }
            }
            
        }
        
    }
}
?>