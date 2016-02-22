<?php

$name=$_POST["name"];
switch ($name)
{
case "lon":
  system ('gpio mode 7 out');
  system ('gpio write 7 1');
  echo "GPIO 7 Light Turned On";
  break;
case "loff":
  system ('gpio mode 7 out');
  system ('gpio write 7 0');
  echo "GPIO 7 Light Turned Off";
  break;
case "fon":
  system ('gpio mode 0 out');
  system ('gpio write 0 1');
  echo "GPIO 0 Fan Turned On";
  break;
case "foff":
  system ('gpio mode 0 out');
  system ('gpio write 0 0');
  echo "GPIO 0 Fan Turned Off";
  break; 
case "check":
	$status = fopen("temperature.txt","r");
	echo "Sensor status:";
	echo fgets($status);
	fclose($status);
	echo "<br>";
  echo "FAN IS ";
  $fan = exec ('gpio read 0');
  if ($fan == 1)
  {
      echo "ON";
  }
      else 
      {
          echo "OFF";
      }
    echo "<br>LIGHT IS ";
  $light = exec ('gpio read 7');
if ($light == 1)
  {
      echo "ON";
  }
      else 
      {
          echo "OFF";
      }

  break;
  case 'espon':
  	$esp = fopen("http://192.168.0.101/temp", "r");
  	break;
default:
  echo "Wrong input";
}
?>