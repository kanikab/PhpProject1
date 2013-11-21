<?php
$dir = sys_get_temp_dir();
session_save_path($dir);
session_start();

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Best View</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/social-icons.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <link rel="Stylesheet" type="text/css" href="js/scroller/css/smoothDivScroll.css" />
        <script type="text/javascript" src="/jquery/jquery-1.3.2.min.js"></script>
        <script src="jquery.plug-in.js" type="text/javascript"></script>
        <script src="http://bdhacker.sourceforge.net/javascript/countries/countries-2.0-min.js"></script>
        <!--[if IE]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- ENDS JS -->

        <!-- GOOGLE FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <!-- Navigation -->
        <div id="nav-wrapper">
            <ul id="nav" class="sf-menu">
                <li class="current-menu-item"><a href="globe.html">Globe</a></li>
                <li class="current-menu-item"><a href="profile.php">Profile</a></li>
                <li class="current-menu-item"><a href="albums.php">Albums</a></li>
                <li class="current-menu-item"><a href="fileupload.php">Upload</a></li>
                <li class="social">
                    <!-- Social -->
                    <a href="https://www.facebook.com/citystorysf" class="poshytip  facebook" title="Become a fan"></a>
                    <a href="https://twitter.com" class="poshytip  twitter" title="Follow my tweets"></a>
                    <!-- ENDS Social -->
                </li>
                 <li><a href="logoff.php">Sign Off</a></li>
            </ul>
        </div>
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
            
            while($row = mysql_fetch_array($result)){
                
                $name = split("_", $row['name']);
               echo "<div id=\"scroll-holder\"><div id=\"makeMeScrollable\">";
                if( $name[0] == $_SESSION['username']){
                
                
foreach ($bucket_contents as $file) {

    $fname = $file['name'];
    $names = split("_", $fname);
   if ($names[1] == $name[1]) {
        $furl = "https://bestview-bucket.s3.amazonaws.com/" . $fname;
        //output a link to the file
        echo "<img src = \"$furl\">";
        //echo "<a href=\"$furl\">$fname</a><br />";
    }
}
echo "</div></div>";
            }  
        }
        }
?>