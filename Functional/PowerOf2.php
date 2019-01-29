<?php
/** This program takes a command-line argument N and prints a table of the powers of 2 that are less than or equal to 2^N.
 **/

  include 'Utility.php';
  echo "enter a number within 31 ";
  //taking user input n
  $num = Utility::powerOfTwoInput();
  
  //calling function to get power to 2 till N
  echo Utility::power_Of_Two($num);
?>

