<?php
define("APPID","671161372917644");
define("SECRET","b29c538439d5460edf0070e6ef191f83");

require 'library/facebook.php';

$facebook = new Facebook(array(
  'appId'  => APPID,
  'secret' => SECRET,
));


?>
