<?php
  include 'Utility.php';
  echo "enter the size of the array array ";
  $num = Utility::integer_Input();
  $arr = Utility::array_Input($num);
  echo "Original Array : ";
  echo implode(', ',$arr );
  echo "\nSorted Array :";
  echo implode(', ',Utility::merge_sort($arr))."\n"

?>                                                                 