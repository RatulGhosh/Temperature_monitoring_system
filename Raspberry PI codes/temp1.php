<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


error_reporting(E_ALL);


if( $_GET["temperature"]) {
   echo $_GET['temperature'];
}
$url='http://192.168.0.134/gpio/1';
$myfile = fopen("temperature.txt", "a") or die("Unable to open file!");
$txt = $_GET["temperature"];
if($txt < 40){
  system('wget '.$url);
}
fwrite($myfile, $txt.",");
fclose($myfile);

?>

