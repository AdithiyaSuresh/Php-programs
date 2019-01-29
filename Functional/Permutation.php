<?php
  include 'Utility.php';
  echo "enter the string ";
  $str = Utility::get_String();
  
  echo Utility::permute($str,0,strlen($str));
?>