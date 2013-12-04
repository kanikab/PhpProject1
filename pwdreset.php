<?php
$dir = sys_get_temp_dir();
session_save_path($dir);
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name=”description” content=”CityStory is an application to time travel through photos of cities and consolidation of vacation spots”></meta>
        <title>CityStory</title>


        <!-- CSS -->
      	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
	        <style>
			 html,body {
		            background: url(images/pwd.jpg) no-repeat center center fixed;
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
			<style type="text/css">
		        p {font-family: fantasy, cursive, Lucida;font-size:18px;}
		    </style>


    </head>
    <body>


       	<!-- Navigation -->
        <div class="container">
            <!-- Navigation bar -->
            <nav class="navbar navbar-inner navbar-fixed-top navbar-inverse" role="navigation">
                <ul class="nav navbar-nav nav-pills">
                    <li><img src="images/logo.jpeg" alt="Citystory" width="100" height="100"></li>
                    <li ><a href="index.php">Login</a></li>
                    <li><a href="register.php">Register</a></li></ul>
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
    <br><br><br><br><br><strong></strong>

        <!-- User Login -->
        <div class="well span8" align="center" style="float:none; margin:0 auto">
                <center><h2>Password Reset</h2> 

                    <p><form method="post" action="reset.php">
                       
                        <p>New Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pwd" required placeholder="password" maxlength="20"/> </p>
                        <p>Confirm Password   &nbsp;&nbsp;&nbsp;<input type="password" name="cpwd" required placeholder="confirm password" maxlength="20"/> </p>
                        <div id="text" style="color: red" > Enter valid password</div></br><br>
                        <p> <input type="submit" value="Submit" name="Submit" class ="btn-inverse" />
                            <input type="reset" value="Reset" name="Reset" />
                        </p>
                    </form>
                    </p>
                </center>
            </div>


        </div>
       

   
    </body>
</html>