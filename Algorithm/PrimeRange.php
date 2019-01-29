<?php
  include 'Utility.php';
  echo "enter the start range ";
  $startRange = Utility::integer_Input();
  echo "enter the end range ";
  $endRange = Utility::integer_Input();
  echo "The prime numbers between $startRange and $endRange are " ;
  $arr = Utility::prime_Range($startRange,$endRange);
  echo (implode(",",$arr));
  echo "\n";
  echo "\n";
  Utility::prime_Anagram($arr);
  echo "\n";
  Utility::prime_Palindrome($arr);
?>                                                                 