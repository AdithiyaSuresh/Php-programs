
<?php
/** program to prints the Nth harmonic number: 1/1 + 1/2 + ... + 1/N  **/

  include 'Utility.php';
  
  //getting input from user
  echo "enter the harmonic value ";
  $num = Utility::harmonic_Input();
  
  //calling function to get the harmonic value
  echo Utility::harmonic_Value($num);
?>

