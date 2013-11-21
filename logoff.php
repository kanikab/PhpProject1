<?php
$dir = sys_get_temp_dir();
session_save_path($dir);
session_destroy();
header("location:index.php");

?>
