
<?php
/** program to calculate the prime factors of a given number **/

  include 'Utility.php';

  echo "enter the number to find the prime factors ";
  //taking user input
  $num = Utility::factor_Input();
  
  //function to get the prime factors on given number
  echo Utility::prime_Factors($num);
?>