<?php

$name=$_POST["name"];
switch ($name)
{
case "ON":
  system ('gpio write 7 0');
  echo "Sensor is ON";
  break;
case "OFF":
  system ('gpio write 7 0');
  echo "Sensor is OFF";
  break;
}
?>