<?php
ob_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="google-translate-customization" content="dd6dc8d31eae27c9-1af41dda936d789b-g8a2fe6bb665c9411-1d"></meta>

        <title>Citystory</title>

        <!-- CSS -->
       <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <style>
		 html,body {
	            background: url(images/forgot.jpg) no-repeat center center fixed;
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
         <div class="well span10" align="center" style="float:none; margin:0 auto">
       
                <h2>Forgot Your Password </h2> 
                <div id="mn">
                <br><p>Enter your  email id</p>
                
                    <form method="post" action="forgot.php">
                        <p><input type="email" name="username" required placeholder="xyz@example.com" requiredss/> 
                             <br><input name="submit" type="submit" value="submit"class="btn-inverse">
                        </p>   
                    </form>
            </div>
            <div id="text1" hidden="true">
                <h4>An Email has been sent to the registered email. Click here to return to 
                    <a href ="index.php">Login</a> 
                    page</h4>
            </div>
            <div id="text2" hidden="true">
                <h4>No user is registered with the email. Click here to <a href="index.php">Register</a> 
                   
                    page.</h4>
            </div>
		</div>
            
        
       

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
                    $msg = "Password reset has been requested. Please click on below link to reset the password. ";
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
