<?php
  require 'Utility.php';
  echo "enter your temperature type ";
  echo "1 for fahrenheit, 2 for celsius ";
  $num = Utility::integer_Input();
  echo "enter the temperature ";
  $temp = Utility::integer_Input();
  $res = Utility::temperaturConversion($temp,$num);
  if($num==1)
  {
      echo "temperature from fahrenheit to celcius is ".(int)$res." celsius\n";
  }
  else
  {
      echo "temperature from celcius to fahrenheit is ".(int)$res." fahrenheit\n";
  }
?>