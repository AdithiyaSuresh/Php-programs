<?php
  include 'Utility.php';
  echo "enter a non negative number ";
  $c = Utility::sqrt_Input();
  $sqrt = Utility::square_Root($c);
  echo "sqaue root of $c is $sqrt\n";
?>