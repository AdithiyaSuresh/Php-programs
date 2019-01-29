<?php
  include 'Utility.php';
  echo "enter the size of array\n";
  $num = Utility::integer_Input();
  echo "enter the values ";
  $arr = Utility::array_Input_Num($num);
  echo "enter the num to search \n";
  $num = Utility::integer_Input();
  $time1 = Utility::time_Elapsed_Binary($arr,$num);
  echo "elapsed time for binary search on integer is $time1 mi\n";
  $count = count($arr);
  $time2 = Utility::time_Elapsed_Insertion($arr,$count);
  echo "elapsed time for insertion sort on integer is $time2 mi\n";
  $time3 = Utility::time_Elapsed_Bubble($arr,$count);
  echo "elapsed time for bubble sort on integer is $time3 mi\n";
?>       