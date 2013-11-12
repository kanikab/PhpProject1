<?php
session_start();
ob_start();
?>
<?php
echo 'hi here ia am '. $_SESSION['username'];
?>
