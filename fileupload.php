<?php
session_start();
ob_start();
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

        <!-- Navigation -->
        <div class="main1">
            <h1>File Upload</h1>
            <!--<form action="fileupload.php" method="post" enctype="multipart/form-data">-->
            <form action="page.php" method="post" enctype="multipart/form-data">
                Select Location
                <input name="place" type="text">
                <label for="file">Select File To Be Uploaded</label><br>
                  <input name="file" type="file" />
  <input name="Submit" type="submit" value="Upload">
            </form>
        </div>
        <!-- Navigation -->
        <!-- User Login -->

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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    fileupload();
}

function fileupload() {
    $con = mysql_connect("localhost", "root", "");
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("297_project", $con);
    if ($_FILES["file"]["error"] > 0) {
        echo "Error: " . $_FILES["file"]["error"] . "<br>";
    } else {
        $str = "C:\\297\\";
        $location = "SF";
        $date = date('Y-m-d', strtotime(time()));
        $name = $_FILES["file"]["name"];
        $type = $_FILES["file"]["type"];
        $size = $_FILES["file"]["size"];
        $sizebytes = ( $size / 1024) . "kB";
        $tmp = $_FILES["file"]["tmp_name"];

        $fp = fopen($tmp, 'r');
        $content = fread($fp, $size);
        $content1 = addslashes($content);

        $str = $str . $name;
        $fileData = file_get_contents($tmp);
        $fhandle = fopen($str, 'w') or die("Error opening file");
        fwrite($fhandle, $fileData) or die("Error writing to file");
        fclose($fhandle) or die("Error closing file");
        fclose($fp);
        $sql = "INSERT into content VALUES ('" . $location . "','" . $name . "','" . $date . "','" . $content1 . "','" . $type . "','" . $sizebytes . "')";
        if (!mysql_query($sql, $con)) {
            //die('Error: ' . mysql_error());
            echo "<script type='text/javascript'>
             alert(\"File Uploaded Failed\");
             </script>";
        } else {
            echo "<script type='text/javascript'>
             alert(\"File Uploaded \");
             </script>";
        }
    }
}
?>