<?php

$result = $_POST['place'];

if (isset($result)) {
    $result_explode = explode('|', $result);
    $lat = $result_explode[1];
    $lon = $result_explode[2];
    $city= $result_explode[0];
    include_once("rds_db.php");

    $sql = "SELECT * FROM globe WHERE name = '$city'";
    $res = mysql_query($sql);
    $row = mysql_fetch_array($res);

    if(!$row) {
        $sql = "INSERT INTO globe (latitude,longitude, name) VALUES ('$lat', '$lon', '$city')";
        mysql_query($sql);
    }
}

?>

<html>
<body>
      <form action="" method="post" enctype="multipart/form-data">
          <h6>Select Location
              <select id="place" name="place">

				<option value = "Amsterdam|52.3702|4.8952">Amsterdam</option>
                        <option value = "Athens|37.9837|23.7293">Athens</option>
                        <option value = "Atlantic City|
39.3642|-74.4229">Atlantic City</option>
                        <option value = "Baltimore|
39.2904|-76.6122">Baltimore</option>
                        <option value = "Bangkok|13.7279|100.5241">Bangkok</option>
                        <option value = "Bangalore|12.9716|77.5946">Bangalore</option>
                        <option value = "Beijing|
39.9040|116.4075">Beijing</option>
                        <option value = "Berlin|52.5200|12.4050">Berlin</option>
                        <option value = "Budapest|47.4979|19.0402">Budapest</option>
                        <option value = "Cairo|30.0444|31.2357">Cairo</option>
                        <option value = "Canberra|-35.2820|149.1287">Canberra</option> 
                        <option value = "Cannes|
43.5528|7.0173">Cannes</option> 
                        <option value = "Chicago|
41.8781|-87.6297">Chicago</option>
                        <option value = "Copenhagen|55.6760|12.5683">Copenhagen</option>
                        <option value = "Delhi|28.6353|77.2249">Delhi</option>
                        <option value = "Dubai City|
25.2711|55.3075">Dubai City</option>
                        <option value = "Dublin|53.3498|-6.2603">Dublin</option>
                        <option value = "Florence|43.7710|11.2480">Florence</option>
                        <option value = "Geneva|46.1983|6.1423">Geneva</option>
                        <option value = "Havana|23.1168|-82.3886">Havana</option>
                        <option value = "Helsinki|60.1733|24.9410">Helsinki</option>
                        <option value = "Hong Kong|22.3964|114.1095">Hong Kong</option>
                        <option value = "Honolulu|
21.3069|-157.8583">Honolulu</option>
                        <option value = "Istanbul|41.0052|28.9770">Istanbul</option> 
                        <option value = "Jakarta|
-6.2115|106.8452">Jakarta</option>
                        <option value = "Jerusalem|
31.7683|35.2137">Jerusalem</option>
                        <option value = "Kansas City|39.0997|-94.5785">Kansas City</option>
                        <option value = "Lisbon|38.7253|-9.1500">Lisbon</option>
                        <option value = "London|51.5112|-0.1198">London</option>
                        <option value = "Los Angeles|34.0522|-118.2436">Los Angeles</option>
                        <option value = "Luxembourg|49.8152|6.1295">Luxembourg</option>
                        <option value = "Madrid|
40.4168|-3.7037">Madrid</option>
                        <option value = "Manila|14.5995|120.9842">Manila</option>
                        <option value = "Melbourne|-37.8141|144.9632">Melbourne</option>
                        <option value = "Mexico|23.6345|-102.5527">Mexico</option>
                        <option value = "Milan|45.4654|9.1865">Milan</option>
                        <option value = "Montreal|45.5086|-73.5539">Montreal</option>
                        <option value = "Moscow|55.7558|37.6173">Moscow</option>
                        <option value = "Mumbai|
19.0759|72.8776">Mumbai</option>
                        <option value = "Munich|
48.1351|11.5819">Munich</option>
                        <option value = "New York|40.7143|-74.0059">New York</option>
                        <option value = "Nice|43.6960|7.2655">Nice</option>
                        <option value = "Osaka|34.6937|135.5021">Osaka</option>
                        <option value = "Ottawa|
45.4215|-75.6971">Ottawa</option>
                        <option value = "Oslo|59.9138|10.7522">Oslo</option>
                        <option value = "Paris|48.8566|2.3522">Paris</option>
                        <option value = "Philadelphia|39.9523|-75.1637">Philadelphia</option>
                        <option value = "Prague|50.0755|14.4378">Prague</option>
                        <option value = "Quito">Quito</option>
                        <option value = "San Francisco|37.7749|-122.4194">San Francisco</option>
                        <option value = "Santa Fe|
35.6869|-105.9377">Santa Fe</option>
                        <option value = "Santiago|-33.4691|-70.6419">Santiago</option>
                        <option value = "Sao Paulo|
-23.5489|-46.6388">Sao Paulo</option>
                        <option value = "Shanghai|
31.2304|121.4737">Shanghai</option>
                        <option value = "Singapore|1.3520|103.8198">Singapore</option>
                        <option value = "Saint-Petersburg|
59.9342|30.3350">Saint-Petersburg</option>
                        <option value = "Sydney|-33.8674|151.2069">Sydney</option>
                        <option value = "Taipei|25.0910|121.5598">Taipei</option>
                        <option value = "Tokyo|
35.6894|139.6917">Tokyo</option>
                        <option value = "Toronto|43.6532|-79.3831">Toronto</option>
                        <option value = "Venice|45.4408|12.3155">Venice</option>
                        <option value = "Vienna|
48.2081|16.3738">Vienna</option>
                        <option value = "Washington|38.9072|-77.0364">Washington</option>
                        <option value = "Zurich|47.3686|8.5391">Zurich</option>

                  </select>
                  <br><br>
                  <input name="Submit" type="submit" value="Upload">
                  </form>
		</body>
		</html>














