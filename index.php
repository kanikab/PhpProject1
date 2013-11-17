<?php 
session_start();
?>
<!doctype html>

<head>

    <!-- General Metas -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
    <title>Login Form</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/layout.css">

</head>
<body background="images/login.jpg">

    <div>
        <p style="text-align:center; margin-top:0px; margin-bottom:0px; padding:0px;">
            <img src="images/logo.jpeg" alt="citystory" width=150 height=150/><br>
            Time travel through images
        </p>    
    </div>
    <!-- Primary Page Layout -->

    <div class="container">

        <div class="form-bg">
            <form method="POST" action="check.php">
                <h2>Login</h2>
                <p><input type="text" placeholder="example@xyz.com" name="email" required></p>
                <p><input type="password" placeholder="Password" name="password" required></p>
                <label for="remember">
                    <input type="checkbox" id="remember" value="remember" />
                    <span>Remember me on this computer</span>
                </label>
                <button type="submit" value="submit"></button>
                <div id="text" style="color: red" hidden ="true">Enter valid login details </div>
                <form>
                    </div>
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
                            var e = document.createElement('script');
                            e.async = true;
                            e.src = document.location.protocol
                            '//connect.facebook.net/en_US/all.js';
                                    document.getElementById('fb-root').appendChild(e);
                        }());

                        function fblogin() {
                            FB.login(function(response) {
                                if (response.authResponse) {
                                    window.location = 'validatefb.php';
                                }
                            }, {scope: 'publish_stream'});
                        }
                    </script>  
                    <p style="text-align:center; margin-top:0px; margin-bottom:0px; padding:0px;">
                        <img border="0" src="login_facebook.png" onClick="fblogin();" border="0" 
                             style="cursor:pointer">
                        <a href="register.php"><img src="rainbow.gif"></a>



                    <p class="forgot">Forgot your password? <a href=""> Reset</a></p>
                    <p class="forgot">New user? <a href="register.php">Register</a></p>


                    </div><!-- container -->

                    <!-- JS  -->
                    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
                    <script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
                    <script src="js/app.js"></script>



                    <!-- End Document -->
                    </body>
                    </html>
<?php
if($_SESSION["logonfail"] == true){
    echo "<script type='text/javascript'>
             document.getElementById('text').hidden = false;
             </script>";
}
else{
    echo "<script type='text/javascript'>
             document.getElementById('text').hidden = true;
             </script>";
}
?>