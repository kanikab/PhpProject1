<?php
$dir = sys_get_temp_dir();
session_save_path($dir);
session_start();
ob_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Citystory</title>

        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <style>
            html,body {
                background: url(images/album.jpg) no-repeat center center fixed;
                -webkit-background-size: cover; /* For WebKit*/
                -moz-background-size: cover;    /* Mozilla*/
                -o-background-size: cover;      /* Opera*/
                background-size: cover;         /* Generic*/
            }
        </style>
        <style type="text/css">
            p {font-family: fantasy, cursive, Lucida;font-size:27px;}
        </style>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <link rel="Stylesheet" type="text/css" href="js/scroller/css/smoothDivScroll.css" />
        <script type="text/javascript" src="/jquery/jquery-1.3.2.min.js"></script>
        <script src="jquery.plug-in.js" type="text/javascript"></script>

        <!-- GOOGLE FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
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
        </div><br><br><br><br><br>
        <!-- JS -->
        <!-- jQuery library - Please load it from Google API's -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" ></script>

        <!-- Smoothscroller -->
        <!-- jQuery UI Widget and Effects Core (custom download)
             You can make your own at: http://jqueryui.com/download -->
        <script src="js/scroller/js/jquery-ui-1.8.23.custom.min.js" ></script>

        <!-- Latest version (3.0.6) of jQuery Mouse Wheel by Brandon Aaron
             You will find it here: http://brandonaaron.net/code/mousewheel/demos -->
        <script src="js/scroller/js/jquery.mousewheel.min.js" ></script>

        <!-- jQuery Kinectic (1.5) used for touch scrolling -->
        <script src="js/scroller/js/jquery.kinetic.js" ></script>

        <!-- Smooth Div Scroll 1.3 minified-->
        <script src="js/scroller/js/jquery.smoothdivscroll-1.3-min.js" ></script>
        <!-- ENDS Smoothscroller -->


        <script src="js/quicksand.js"></script>

        <!-- prettyPhoto -->
        <script  src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
        <!-- ENDS prettyPhoto -->

        <!-- superfish -->
        <link rel="stylesheet" media="screen" href="css/superfish.css" /> 
        <script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
        <script  src="js/superfish-1.4.8/js/superfish.js"></script>
        <script  src="js/superfish-1.4.8/js/supersubs.js"></script>
        <!-- ENDS superfish -->

        <!-- poshytip -->
        <link rel="stylesheet" href="js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
        <link rel="stylesheet" href="js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
        <script  src="js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
        <!-- ENDS poshytip -->

        <script  src="js/backstretch.js"></script>
        <script  src="js/custom.js"></script>
        <!-- ENDS JS -->
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