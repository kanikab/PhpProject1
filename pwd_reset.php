<?php
ob_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Best View</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/social-icons.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />

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
                <li class="current-menu-item"><a href="Place_Mark.html">Map</a></li>
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
        <!-- User Login -->
        <div id="mn1" class="main1">
            <div id="mn"> 
                <h2>Password Reset</h2> 
                <center>
                    Password Requirement:
                    <br></br>
                    Minimum 7 characters and Maximum 20 characters.<br></br>
                    Atleast 1 uppercase alphabet, 1 digit and special characters
                    <p><form method="post" action="pwd_reset.php">
                        <p>New Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pwd" required/> </p>
                        <p>Confirm Password   &nbsp;&nbsp;&nbsp;<input type="password" name="cpwd" required/> </p>
                        <p> <input type="submit" value="Submit" name="Submit" />
                            <input type="reset" value="Reset" name="Reset" />
                        </p>
                    </form>
                    </p>
                </center>
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

        <?php
        include 'rds_db.php';
        $uname = $_POST["username"];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            reset_password($uname);
        }

        function reset_password($uname) {
            $pwd = $_POST["pwd"];
            $cpwd = $_POST["cpwd"];
            if (chkpwd($pwd, $cpwd)) {
                $sql = "UPDATE users SET password='" . md5($pwd) . "'where email = '" . $uname . "'";
                $result = mysql_query($sql);
                if (!$result) {
                    echo 'error';
                } else {
                    $row = mysql_affected_rows();
                    if ($row == 1) {
                        echo "<script type='text/javascript'>
             alert(\"Password Changed \n You will be redirected to login page.\");
             </script>";
                        header('Location: login.php');
                    }
                }
            }
        }

        function chkpwd($pwd, $cpwd) {
            $clen = strlen($cpwd);
            $len = strlen($pwd);
            If ($len < 7 || $len > 20 || $clen < 7 || $clen > 20) {
                echo "<script type='text/javascript'>
             alert(\"Password length less than 7 characters or greater than 20 characters\");
             </script>";
                return false;
            }
            if ((preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%!&]).{7,20}/", $pwd)) && (preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%!&]).{7,20}/", $cpwd))) {
                if ($pwd == $cpwd) {
                    return true;
                } else {
                    echo "<script type='text/javascript'>
             alert(\"Password Doesnot Match\");
             </script>";
                    return false;
                }
            } else {
                echo "<script type='text/javascript'>
             alert(\"Password doesnot meet the requirement\");
             </script>";
                return false;
            }
        }
        ?>
    </body>
</html>