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
                <li class="current-menu-item"><a href="index.html">Home</a></li>
                <li class="current-menu-item"><a href="register.php">Register</a></li>
                <li class="social">
                    <!-- Social -->
                    <a href="https://www.facebook.com/citystorysf" class="poshytip  facebook" title="Become a fan"></a>
                    <a href="https://twitter.com" class="poshytip  twitter" title="Follow my tweets"></a>
                    <!-- ENDS Social -->
                </li>			
            </ul>
        </div>
        <!-- Navigation -->
        <!-- User Login -->
        <div id="mn1" class="main1">
            <div id="mn"> 
                <h2>Forgot Your Password </h2> 
                <p><h4>Enter your Username/E-Mail Id</h4></p>
                    <form method="post" action="forgot.php">
                        <p><input type="text" name="username" required placeholder="xyz@example.com" /> 
                            <input type="submit" value="Submit" name="Submit" />
                        </p>   
                    </form>
            </div>
            <div id="text1" hidden="true">
                <h2>An Email has been sent to the registered email. Click here to return to 
                    <a href ="index.html">Login</a> 
                    page</h2>
            </div>
            <div id="text2" hidden="true">
                <h2>No user is registered with the email. Click here to <a href="index.html">Register</a> 
                   
                    page.</h2>
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            forgot_password();
        }

        function forgot_password() {
            $uname = mysql_real_escape_string($_POST["username"]);
            $sql = "select * from users where email = '" . $uname . "'";
            $result = mysql_query($sql);
            if (!$result) {
                echo 'error';
            } else {
                $row = mysql_numrows($result);
               
                if ($row == 1) {
                    resetpwd();
                    $msg = "Password reset has been requested. Please click on below link to reset the password";
                    $url = "http://bestview.elasticbeanstalk.com/";
                    $url = $url."pwd_reset.php?username=".$uname;
                    $msg .= $url;
                    mail($uname,"Password Reset",$msg);
                    
                }
                else {
                    nouser();
                }
            }
        }
        
        function resetpwd(){
            echo "<script type='text/javascript'>
             document.getElementById('mn').hidden = true;
             document.getElementById('text1').hidden = false;
             document.getElementById('text2').hidden = true;
             </script>";
           
        }
        
        
        function nouser(){
            echo "<script type='text/javascript'>
             document.getElementById('mn').hidden = true;
             document.getElementById('text1').hidden = true;
             document.getElementById('text2').hidden = false;
             </script>";
        }
        ?>
    </body>
</html>
