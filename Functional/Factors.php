<?php
  include 'Utility.php';
  echo "enter the number to find the prime factors ";
  $num = Utility::factor_Input();
  
  echo Utility::prime_Factors($num);
?>