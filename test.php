<?php 
$dir = sys_get_temp_dir();
session_save_path($dir);
session_start();

echo $_SESSION['username'];
?>