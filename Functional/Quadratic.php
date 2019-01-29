<?php
  include 'Utility.php';
  echo "enter the value for a ";
  $a = Utility::integer_Input();
  echo "enter the value for b ";
  $b = Utility::integer_Input();
  echo "enter the value for c ";
  $c = Utility::integer_Input();
  Utility::find_Roots($a,$b,$c);
  
?>