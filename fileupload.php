<html>
    <head>
        <meta charset="utf-8">
        <title>Registration</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/social-icons.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />

        <!-- ENDS CSS -->	

        <link rel="Stylesheet" type="text/css" href="js/scroller/css/smoothDivScroll.css" />

        <!--[if IE]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- ENDS JS -->

        <!-- GOOGLE FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>



    </head>
    <body>

        <!-- Image buttons -->
        <ul id="image-buttons">
            <li id="close-image" class="poshytip" title="Close image" ></li>
            <li id="info-button" class="poshytip" title="Image info"></li>
        </ul>
        <!-- ENDS Image buttons -->

        <!-- Navigation -->
        <div id="nav-wrapper">
            <ul id="nav" class="sf-menu">
                <li class="current-menu-item"><a href="login.php">Home</a></li>
                <li class="current-menu-item"><a href="register.php">Register</a></li>
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
        <div>
            <div class="main2"> 
                <form action="fileupload.php" method="post" enctype="multipart/form-data">
                    <label for="file">Filename:</label>
                    <input type="file" name="file" id="file"><br>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
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
        $name = $_FILES["file"]["name"];
        $type = $_FILES["file"]["type"];
        $size = ($_FILES["file"]["size"] / 1024) . "kB";
        $tmp = $_FILES["file"]["tmp_name"];
        $fp = fopen($tmp, 'r');
        $content = fread($fp, $fileSize);
        $content = addslashes($content);
        fclose($fp);
    }
}
?>