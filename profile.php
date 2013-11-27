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

    <title>Citystory</title>

    <!-- Stylesheets -->
    <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        #round-image {
            border-radius: 100%;
            -o-border-radius: 100%;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
        }
        html,body {
            background: url(images/profile.jpg) no-repeat center center fixed;
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
    <div class="container">
        <!-- Navigation bar -->
        <nav class="navbar navbar-inner navbar-fixed-top navbar-inverse" role="navigation">
            <ul class="nav navbar-nav nav-pills">
                <li><img src="images/logo.jpeg" alt="Citystory" width="100" height="100"></li>
                <li ><a href="globe.html">Globe</a></li>
                <li class="active"><a href="profile.php">Profile</a></li>
                <li><a href="albums.php">Albums</a></li>
                <li><a href="fileupload.php">Upload</a></li>
                <li><a href="logoff.php">Sign Off</a></li></ul>
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
    <br><br><br><br><br>
    <div class="well span10" align="center" style="float:none; margin:0 auto">
        <?php
        include ('rds_db.php');
        $email = $_SESSION['username'];
        $sql = mysql_query("SELECT * from users where email='$email'");
        while ($row = mysql_fetch_array($sql)) {
            $userid = $row['id'];
            if ($userid != 0) {
                $file = "http://graph.facebook.com/" . $userid . "/picture?type=large";
                echo "<img id=\"round-image\" src=\"$file\"></img>";
            }
            echo "<h4>" . "Name  " . "</h4>" . "<p>" . $row['name'] . "</p>";
            echo "<h4>" . "Birthday  " . "</h4>" . "<p>" . $row['birthday'] . "</p>";
            echo "<h4>" . "Gender  " . "</h4>" . "<p>" . $row['gender'] . "</p>";
            echo "<h4>" . "Location " . "</h4>" . "<p>" . $row['location'] . "</p>";
            echo "<h4>" . "email  " . "</h4>" . "<p>" . $row['email'] . "</p>";
        }
        mysql_close($conn);
        ?>	

    </div>


</body>
</html>
