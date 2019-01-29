<?php
/** program to flip the coin as many times suggested
 *  by user and calculate the head and tail percent **/

  //require following function to work
  include 'Utility.php';

  echo "enter the no of times to flip the coin ";
  //taking user input for no of times
  $num = Utility::taking_Number_Input();
  
  //calling function to calculate the percentage
  echo Utility::flipCoin($num);
?>


