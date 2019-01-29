<?php
/**
 * find the Prime numbers in range 0-1000. Store the prime numbers in a 2D Array, the first dimension
 * represents the range 0-100, 100-200, and so on. While the second dimension represents the prime 
 * numbers in that range
 * */

 /**
 * the Prime Number Program and store only the numbers in that range that are Anagrams.
 * */

  //require function in file utlity.php to work 
  include 'Utility.php';
  echo "The prime numbers between 0 and 1000 are " ;
  //calling function in utility to get prime numbers in the range and storing in array
  $arr = Utility::prime_Range(0,1000);
  echo "\n";
  //to print prime numbers in 2d array 
  Utility::TwoDArray($arr);
  echo "\n";
  //to print prime anagrams and non anagrams in 2d array
  Utility::prime_Anagram($arr);
?>                                                                 