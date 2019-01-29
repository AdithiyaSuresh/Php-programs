<?php
/** program to check leap year **/

  include 'Utility.php';
 
  echo "enter the year ";
  //getting the year
  $year = Utility::get_Year();
  
  //calling function to check leap year
  echo Utility::leap_Year($year);
?>

