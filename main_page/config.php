<?php

$server = "localhost";
$db_user = "root";
$db_pass = "";
$database = "raindrop";

mysql_connect($server,$db_user,$db_pass); // isi sesuai host anda
mysql_select_db($database); // nama database yang  saya buat tadi

function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 
 
    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 
 
    $bytes /= pow(1024, $pow); 
 
    return round($bytes, $precision) . ' ' . $units[$pow]; 
}  
?>