<?php
$dir = sys_get_temp_dir();
session_save_path($dir);
session_start();
ob_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Citystory</title>

        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">

        <style type="text/css">
            p {font-family: fantasy, cursive, Lucida;font-size:27px;}
            html,body {
                background: url(images/upload.jpg) no-repeat center center fixed;
                -webkit-background-size: cover; /* For WebKit*/
                -moz-background-size: cover;    /* Mozilla*/
                -o-background-size: cover;      /* Opera*/
                background-size: cover;         /* Generic*/
            }
        </style>


    </head>
    <body>
        <div class="container">
            <!-- Navigation bar -->
            <nav class="navbar navbar-inner navbar-fixed-top navbar-inverse" role="navigation">
                <ul class="nav navbar-nav nav-pills">
                    <li><img src="images/logo.jpeg" alt="Citystory" width="100" height="100"></li>
                    <li ><a href="globe.html">Globe</a></li>
                    <li ><a href="profile.php">Profile</a></li>
                    <li><a href="albums.php">Albums</a></li>
                    <li class="active"><a href="fileupload.php">Upload</a></li>
                    <li><a href="logoff.php">Sign Off</a></li></ul>
                <a href="https://www.facebook.com/citystorysf"title="Become a fan"><img src="facebook.jpeg" height="50" width="50"></a>
            </nav>
        </div><br><br><br><br><br>

        <!-- Navigation -->
        <div div class="well span7" align="center" style="float:none; margin:0 auto">
            <p><strong>What's your story?</strong></p><br>
            <!--<form action="fileupload.php" method="post" enctype="multipart/form-data">-->
            <form action="page.php" method="post" enctype="multipart/form-data">
                <h6>Select Location
                    <select id = "place" name="place">
                        <option value = "Amsterdam">Amsterdam</option>
                        <option value = "Ankara">Ankara</option>
                        <option value = "Athens">Athens</option>
                        <option value = "Atlantic City">Atlantic City</option>
                        <option value = "Baltimore">Baltimore</option>
                        <option value = "Bangkok">Bangkok</option>
                        <option value = "Bangalore">Bangalore</option>
                        <option value = "Beijing">Beijing</option>
                        <option value = "Berlin">Berlin</option>
                        <option value = "Berne">Berne</option>
                        <option value = "Brussels">Brussels</option>
                        <option value = "Budapest">Budapest</option>
                        <option value = "Buenos Aires">Buenos Aires</option>
                        <option value = "Cairo">Cairo</option>
                        <option value = "Canberra">Canberra</option> 
                        <option value = "Cannes">Cannes</option> 
                        <option value = "Cape Town">Cape Town</option>
                        <option value = "Chicago">Chicago</option>
                        <option value = "Cologne">Cologne</option>
                        <option value = "Copenhagen">Copenhagen</option>
                        <option value = "Damascus">Damascus</option>
                        <option value = "Delhi">Delhi</option>
                        <option value = "Dubai City">Dubai City</option>
                        <option value = "Dublin">Dublin</option>
                        <option value = "Florence">Florence</option>
                        <option value = "Geneva">Geneva</option>
                        <option value = "Hague">Hague</option>
                        <option value = "Ha Noi">Ha Noi</option>
                        <option value = "Havana">Havana</option>
                        <option value = "Helsinki">Helsinki</option>
                        <option value = "Hong Kong">Hong Kong</option>
                        <option value = "Honolulu">Honolulu</option>
                        <option value = "Istanbul">Istanbul</option> 
                        <option value = "Jakarta">Jakarta</option>
                        <option value = "Jerusalem">Jerusalem</option>
                        <option value = "Kansas City">Kansas City</option>
                        <option value = "Kathmandu">Kathmandu</option>
                        <option value = "Kuala Lumpur">Kuala Lumpur</option>
                        <option value = "Lisbon">Lisbon</option>
                        <option value = "London">London</option>
                        <option value = "Los Angeles">Los Angeles</option>
                        <option value = "Luxembourg">Luxembourg</option>
                        <option value = "Madrid">Madrid</option>
                        <option value = "Manila">Manila</option>
                        <option value = "Melbourne">Melbourne</option>
                        <option value = "Mexico">Mexico</option>
                        <option value = "Milan">Milan</option>
                        <option value = "Montreal">Montreal</option>
                        <option value = "Moscow">Moscow</option>
                        <option value = "Mumbai">Mumbai</option>
                        <option value = "Munich">Munich</option>
                        <option value = "Nazareth">Nazareth</option>
                        <option value = "New York">New York</option>
                        <option value = "Nice">Nice</option>
                        <option value = "Osaka">Osaka</option>
                        <option value = "Ottawa">Ottawa</option>
                        <option value = "Oslo">Oslo</option>
                        <option value = "Paris">Paris</option>
                        <option value = "Philadelphia">Philadelphia</option>
                        <option value = "Phnom Penh">Phnom Penh</option>
                        <option value = "Prague">Prague</option>
                        <option value = "Quito">Quito</option>
                        <option value = "Reykjavik">Reykjavik</option>
                        <option value = "Rio de Janeiro">Rio de Janeiro</option>
                        <option value = "San Francisco">San Francisco</option>
                        <option value = "Santa Fe">Santa Fe</option>
                        <option value = "Santiago">Santiago</option>
                        <option value = "Sao Paulo">Sao Paulo</option>
                        <option value = "Shanghai">Shanghai</option>
                        <option value = "Singapore">Singapore</option>
                        <option value = "Stockholm">Stockholm</option>
                        <option value = "Saint-Petersburg">Saint-Petersburg</option>
                        <option value = "Sydney">Sydney</option>
                        <option value = "Taipei">Taipei</option>
                        <option value = "Tokyo">Tokyo</option>
                        <option value = "Toronto">Toronto</option>
                        <option value = "Venice">Venice</option>
                        <option value = "Vienna">Vienna</option>
                        <option value = "Washington">Washington</option>
                        <option value = "Zurich">Zurich</option>
                    </select>
                    <br><br>
                    <input name="file" type="file" class="offset2"/><br><br>
                    <input name="Submit" type="submit" value="Upload"class="btn-inverse">
                    </form>
                    </div>
                    </body>
                    </html>

                    <?php
                    include 'rds_db.php';
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        fileupload();
                    }

                    function fileupload() {
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
                                die('Error: ' . mysql_error());
                            } else {
                                echo "<script type='text/javascript'>
             alert(\"File Uploaded \");
             </script>";
                            }
                        }
                    }
                    ?>