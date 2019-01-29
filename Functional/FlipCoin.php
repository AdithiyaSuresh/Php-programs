<?php
  include 'Utility.php';
  echo "enter the no of times to flip the coin ";
  $num = Utility::taking_number_input();
  
  echo Utility::flipcoin($num);
?>


