<?php 
$dir = sys_get_temp_dir();
session_save_path($dir);
session_start();
?>
<!doctype html>

<head>
	
    <!-- General Metas -->
    <meta charset="utf-8" />
    <meta name="google-translate-customization" content="dd6dc8d31eae27c9-1af41dda936d789b-g8a2fe6bb665c9411-1d"></meta>

    <meta name="description" content="CityStory is an application to time travel through photos of cities and consolidation of vacation spots"></meta>
        <title>CityStory</title>


  	<!-- Stylesheets -->
	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<style>
	html,body { 
	  background: url(images/login.jpg) no-repeat center center fixed; 
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
	}
	.container {
	     padding-right: 0; /*15px in bootstrap.css*/
	     padding-left: 0;  /*idem*/
	     margin-right: auto;
	     margin-left: auto;
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
    <div id="google_translate_element" class="google_translate"></div>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
      <script src="bootstrap/js/bootstrap.js"></script>
		&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;
	<div class="container-fluid">
 	<form class="well span5 pull-right" action="check.php" method="POST">
		<div>
	        <p style="text-align:center; margin-top:0px; margin-bottom:0px; padding:0px;">
	            <img src="images/logo.jpeg" alt="citystory" width=150 height=150/><br>
	            Time travel through images
	        </p>    
	    </div>
		<br><br><label>Username</label>
		<input type="text" class="span3" autofocus="autofocus" placeholder="example@xyz.com" name="email" required/> </br>
		<label>Password </label>
		<input type="password" class="span3" placeholder="password" name="password" required/></br>
		<button  type="submit" value="submit" class="btn btn-primary">Submit </button>
		<button type="reset" class="btn">Clear</button></br></br>
		<input type="checkbox" id="remember" value="remember" />
        <span>Remember me on this computer</span></br>
 		<div id="text" style="color: red" hidden ="true"> Enter valid login details </div></br><br>
		 <!-- Facebook Login -->
		   <div id="fb-root" style="float:left; width:1px;"></div>


		<script>
		window.fbAsyncInit = function() {
		    FB.init({
		       appId: '671161372917644',
		       cookie: true,
		       xfbml: true,
		       oauth: true
		    }); 
		};

		(function() {
		var e = document.createElement('script'); e.async = true;
		e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
		document.getElementById('fb-root').appendChild(e);
		}());

		function fblogin(){
		FB.login(function(response){
		if (response.authResponse) {
		window.location='validatefb.php';
		}
		},{scope: 'publish_stream'});
		}
		</script>  
		<p style="text-align:left; margin-top:0px; margin-bottom:0px; padding:0px;">
		 <img border="0" src="login_facebook.png" onClick="fblogin();" border="0" 
		style="cursor:pointer">
            <a href="register.php"><img src="rainbow.gif"></a></br></br>
        <p class="forgot">Forgot your password? <a href="forgot.php"> Reset</a></p>
        <p class="forgot">New user? <a href="register.php">Register</a></p>
		</form>
		</div>
		<!-- JS  -->
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	    <script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>");</script>
	    <script src="js/app.js"></script>
		

        <!-- End Document -->
                    </body>
                    </html>
					<?php
					if($_SESSION["logonfail"] == true){
                                            echo 'hi';
					    echo "<script type='text/javascript'>
					             document.getElementById('text').hidden = false;
					             </script>";
					}
					else{
                                            echo 'bi';
					    echo "<script type='text/javascript'>
					             document.getElementById('text').hidden = true;
					             </script>";
					}
					?>
