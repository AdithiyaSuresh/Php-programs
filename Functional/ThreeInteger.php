<?php
  include 'Utility.php';
  echo "enter N integer as size of array  ";
  $num = Utility::no_Of_Times();
  echo "enter the values for the array ";
  $arr = Utility::array_Input($num);
  Utility::three_Integer($arr);
 
?>