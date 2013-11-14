<?php
session_start();
ob_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Best View</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/social-icons.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/tab-tab.css" type="text/css" media="screen" />
        <link rel="Stylesheet" type="text/css" href="js/scroller/css/smoothDivScroll.css" />
 <script type="text/javascript" src="/jquery/jquery-1.3.2.min.js"></script>
<script src="jquery.plug-in.js" type="text/javascript"></script>
<script src="http://bdhacker.sourceforge.net/javascript/countries/countries-2.0-min.js"></script>
        <!--[if IE]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- ENDS JS -->

        <!-- GOOGLE FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <!-- Navigation -->

        <article class="tabtab melon flex">

            <nav>

                <ul>
                    <li><a href="#tab1">Profile</a></li>
                    <li><a href="#tab2">Image Uploaded</a></li>
                    <li><a href="#tab3">Audio Uploaded</a></li>
                    <li><a href="#tab4">Video Uploaded</a></li>
                    <li><a href="#tab5">File Upload</a></li>
                </ul>

            </nav>


            <section id="tab1">
                User Profile
            </section>

            <section id="tab2">
                 Select Location<br>
                 Country <select name="country">
<option value="">Country...</option>
<option value="AF">Afghanistan</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AG">Angola</option>
<option value="AI">Anguilla</option>
<option value="AG">Antigua &amp; Barbuda</option>
<option value="AR">Argentina</option>
<option value="AA">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia</option>
<option value="BL">Bonaire</option>
<option value="BA">Bosnia &amp; Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BR">Brazil</option>
<option value="BC">British Indian Ocean Ter</option>
<option value="BN">Brunei</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="IC">Canary Islands</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CD">Channel Islands</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CI">Christmas Island</option>
<option value="CS">Cocos Island</option>
<option value="CO">Colombia</option>
<option value="CC">Comoros</option>
<option value="CG">Congo</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="CT">Cote D'Ivoire</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CB">Curacao</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="TM">East Timor</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FA">Falkland Islands</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="FS">French Southern Ter</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GB">Great Britain</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GN">Guinea</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HW">Hawaii</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IA">Iran</option>
<option value="IQ">Iraq</option>
<option value="IR">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="NK">Korea North</option>
<option value="KS">Korea South</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Laos</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macau</option>
<option value="MK">Macedonia</option>
<option value="MG">Madagascar</option>
<option value="MY">Malaysia</option>
<option value="MW">Malawi</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="ME">Mayotte</option>
<option value="MX">Mexico</option>
<option value="MI">Midway Islands</option>
<option value="MD">Moldova</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Nambia</option>
<option value="NU">Nauru</option>
<option value="NP">Nepal</option>
<option value="AN">Netherland Antilles</option>
<option value="NL">Netherlands (Holland, Europe)</option>
<option value="NV">Nevis</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NW">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau Island</option>
<option value="PS">Palestine</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PO">Pitcairn Island</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="ME">Republic of Montenegro</option>
<option value="RS">Republic of Serbia</option>
<option value="RE">Reunion</option>
<option value="RO">Romania</option>
<option value="RU">Russia</option>
<option value="RW">Rwanda</option>
<option value="NT">St Barthelemy</option>
<option value="EU">St Eustatius</option>
<option value="HE">St Helena</option>
<option value="KN">St Kitts-Nevis</option>
<option value="LC">St Lucia</option>
<option value="MB">St Maarten</option>
<option value="PM">St Pierre &amp; Miquelon</option>
<option value="VC">St Vincent &amp; Grenadines</option>
<option value="SP">Saipan</option>
<option value="SO">Samoa</option>
<option value="AS">Samoa American</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome &amp; Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="OI">Somalia</option>
<option value="ZA">South Africa</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syria</option>
<option value="TA">Tahiti</option>
<option value="TW">Taiwan</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania</option>
<option value="TH">Thailand</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad &amp; Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TU">Turkmenistan</option>
<option value="TC">Turks &amp; Caicos Is</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States of America</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VS">Vatican City State</option>
<option value="VE">Venezuela</option>
<option value="VN">Vietnam</option>
<option value="VB">Virgin Islands (Brit)</option>
<option value="VA">Virgin Islands (USA)</option>
<option value="WK">Wake Island</option>
<option value="WF">Wallis &amp; Futana Is</option>
<option value="YE">Yemen</option>
<option value="ZR">Zaire</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
</select>
                 
                 <br>
                 City<input type="text" name="city" id ="city"/>

            </section>

            <section id="tab3">
                Video Uploaded
            </section>

            <section id="tab4">
                Audio Uploaded
            </section>

            <section id="tab4">
                File Upload
            </section>
 
            <section id="tab5">
                <h1>File Upload</h1>
                <form action="home.php" method="post" enctype="multipart/form-data">
                    Select Location
                    
                    <label for="file">Select File To Be Uploaded</label><br>
          
                    <input type="file" name="file" id="file"><br>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </section>

        </article>
    </div>
    <!-- Navigation -->
    <!-- User Login -->

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