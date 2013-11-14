<?php
define("APPID","671161372917644");
define("SECRET","3f5f19de20a5bdce841ca66ed1c40a0c");

require 'library/facebook.php';

$facebook = new Facebook(array(
  'appId'  => APPID,
  'secret' => SECRET,
));


?>
