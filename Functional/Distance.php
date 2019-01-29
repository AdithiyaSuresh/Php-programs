<?php
  include 'Utility.php';
  echo "enter the value for x ";
  $x = Utility::integer_Input();
  echo "enter the value for y ";
  $y = Utility::integer_Input();
  echo "distance is ".Utility::distance($x,$y);
?>