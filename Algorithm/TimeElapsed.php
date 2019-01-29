<?php
/** program to find the time elapsed for diffrent serching and sorting algorithms **/

 //require following function to work
  include 'Utility.php';

  //taking array size from user
  echo "enter the size of array\n";
  $num = Utility::integer_Input();

  //taking array values from user
  echo "enter the values ";
  $arr = Utility::array_Input_Num($num);

  //input for binary search
  echo "enter the num to search \n";
  $num = Utility::integer_Input();

  //time elapsed for binary search
  $time1 = Utility::time_Elapsed_Binary($arr,$num);
  echo "elapsed time for binary search on integer is $time1 mi\n";
  $count = count($arr);

  //time elapsed for insertion sort
  $time2 = Utility::time_Elapsed_Insertion($arr,$count);
  echo "elapsed time for insertion sort on integer is $time2 mi\n";

  //time elapsed for bubble sort
  $time3 = Utility::time_Elapsed_Bubble($arr,$count);
  echo "elapsed time for bubble sort on integer is $time3 mi\n";
?>       