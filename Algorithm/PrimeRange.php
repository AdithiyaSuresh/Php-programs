<?php
/** program to find the prime numbers in the given range 
 * and anagrams and palindromes that are prime **/

  //require function below to work
  include 'Utility.php';
  echo "enter the start range ";
  
  //user input for start range
  $startRange = Utility::integer_Input();
  echo "enter the end range ";

  //user input for end range
  $endRange = Utility::integer_Input();

  echo "The prime numbers between $startRange and $endRange are " ;

  //calling function to get array of prime numbers
  $arr = Utility::prime_Range($startRange,$endRange);

  //printing array as string
  echo (implode(",",$arr));
  echo "\n";
  echo "\n";

  //to get array of prime numbers that are anagrams
  Utility::prime_Anagram($arr);
  echo "\n";

  //to get array of prime numbers that are palindrome
  Utility::prime_Palindrome($arr);
?>                                                                 