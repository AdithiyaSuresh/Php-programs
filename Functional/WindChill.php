<?php
  include 'Utility.php';
  echo "enter the value for temperature ";
  $temp = Utility::temp_Input();
  echo "enter the value for speed ";
  $speed = Utility::speed_Input();
  $res = Utility::wind_Chill($temp,$speed);
  echo "The windchill is ".$res."\n";
?>