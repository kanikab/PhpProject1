<?php
include ("rds_db.php");

function parse_signed_request($signed_request, $secret) {
  list($encoded_sig, $payload) = explode('.', $signed_request, 2); 

  // decode the data
  $sig = base64_url_decode($encoded_sig);
  $data = json_decode(base64_url_decode($payload), true);

  if (strtoupper($data['algorithm']) !== 'HMAC-SHA256') {
    error_log('Unknown algorithm. Expected HMAC-SHA256');
    return null;
  }
$name=$data['registration']['name'];
$password=$data['registration']['password'];
$bday=$data['registration']['birthday'];
$gender=$data['registration']['gender'];
$location=$data['registration']['location']['name'];
$email=$data['registration']['email'];
$sql = "INSERT INTO users ";
    $sql .= "VALUES('$name', md5('$password'),'$bday','$gender','$location','$email')";
    if (!mysql_query($sql)) {
        die('Error: ' . mysql_error());
    } else {
        echo "<h3> Hello $name, you have been added to our database. Welcome!</h3>";
        header("location:index.php");
        
    }
    mysql_close($con);


  // check sig
  $expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
  if ($sig !== $expected_sig) {
    error_log('Bad Signed JSON signature!');
    return null;
  }

  return $data;
}

function base64_url_decode($input) {
    return base64_decode(strtr($input, '-_', '+/'));
}

if ($_REQUEST) {
   $response = parse_signed_request($_REQUEST['signed_request'], 
                                   FACEBOOK_SECRET);
} else {
  echo '$_REQUEST is empty';
}
?>