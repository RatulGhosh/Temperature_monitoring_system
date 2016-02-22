<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


error_reporting(E_ALL);


if( $_GET["temperature"]) {
   echo $_GET['temperature'];
}

$myfile = fopen("temperature.txt", "w") or die("Unable to open file!");
$txt = $_GET["temperature"];
fwrite($myfile, $txt);
fclose($myfile);

?>
