<?php
  include 'Utility.php';
  echo "The prime numbers between 0 and 1000 are\n" ;
  $arr = Utility::prime_Range(0,1000);
  Utility::queueAnagram($arr);
?>                                                                 