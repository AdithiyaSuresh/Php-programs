<?php
  include 'Utility.php';
  echo "enter the N distinct coupon number ";
  $num = Utility::coupon_Input();
  
  echo Utility::coupon_Numbers($num);
?>