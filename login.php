<!DOCTYPE  html>
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
                <li class="current-menu-item"><a href="globe.html">Globe</a></li>
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
        <!-- User Login -->

        <div class="right">
            <form id="usrlogin" action="login.php" method="post">
                <p><p></p>
                Username <input type="text" name="username"  placeholder="example@xyz.com" required/>
                Password <input type="password" name="password" placeholder="abcdef" required/>
                <p><input type="submit" value="Login" name="login" />
                    <input type="reset" value="Reset" />
                    <a href ="forgt.php"><b>Forgot Password</b></a>
                </p>
           </form>
            <div id="error" hidden="true">
                <p><b>Enter valid Email id and password </b></p>
            </div>
        </div> 


        <!-- Scroll -->
        <div id="scroll-holder">
            <div id="makeMeScrollable">
                <a href="img/dummies/sf1.jpg"  ><img src="img/dummies/sf1.jpg"   /></a>
                <a href="img/dummies/sf8.jpg"  ><img src="img/dummies/sf8.jpg"   /></a>
                <a href="img/dummies/sf2.jpg"  ><img src="img/dummies/sf2.jpg"   /></a>
                <a href="img/dummies/sf3.jpg"  ><img src="img/dummies/sf3.jpg"   /></a>
                <a href="img/dummies/sf4.jpg"  ><img src="img/dummies/sf4.jpg"   /></a>
                <a href="img/dummies/sf5.jpg"  ><img src="img/dummies/sf5.jpg"   /></a>
                <a href="img/dummies/sf6.jpg"  ><img src="img/dummies/sf6.jpg"   /></a>
                <a href="img/dummies/sf7.jpg"  ><img src="img/dummies/sf7.jpg"   /></a>
                <a href="img/dummies/sf8.jpg"  ><img src="img/dummies/sf8.jpg"   /></a>
            </div>
        </div>
        <!-- ENDS Scroll -->
        
        
        <div id = "audio" class = "audio_control"> </div>



        <!-- ENDS image description -->	


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
 <!-- audio control -->
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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    login();
}

function login() {
    $uname = $_POST["username"];
    $pwd = $_POST["password"];
    $con = mysql_connect("localhost", "root", "");
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("297_project", $con);
    $sql = "select * from userdetails where usernme = '" . $uname . "' and password = '" . $pwd . "'";
    $result = mysql_query($sql);
    if (!$result) {
        echo 'error';
    }
    $row = mysql_numrows($result);
    if($row != 1){
       echo "<script type='text/javascript'>
             document.getElementById('error').hidden = false;
             </script>";
    }
}


?>