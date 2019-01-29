<?php
  include 'Utility.php';
  echo "enter the year ";
  $year = Utility::get_year();
  
  echo Utility::leap_year($year);
?>

