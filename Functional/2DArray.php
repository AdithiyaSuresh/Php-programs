<?php
  include 'Utility.php';
  echo "enter the no of rows ";
  $rows = Utility::no_Of_Rows();
  echo "enter the no of columns ";
  $cols = Utility::no_Of_Cols();
  echo "enter the values ";
 // print_r (Utility::array_Value($rows,$cols));
  $arr = Utility::array_Value($rows,$cols);
 // Utility::array_Print($arr,$rows,$cols);
?>