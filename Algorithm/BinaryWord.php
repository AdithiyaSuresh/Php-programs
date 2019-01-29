<?php
/** program to find whether a word in present in a file using binary serach **/  

  //require following function to work
  include 'Utility.php';
  
  //opening the file
  $myfile = fopen("file.txt","r") or die("Unable to open file!");

  //reading the file and stored as string
  $str = fread($myfile,filesize("file.txt"));

  //storing each word in array
  $arr = explode(",",$str);
  echo "enter the word to be searched ";
  
  //taking input word from user
  $str2 = Utility::string_Input();

  //searching for the word
  if(Utility::binary_Search_String($arr,0,(count($arr)-1),$str2))
  {
      echo "word found\n";
  }
  else
  {
      echo "word not found\n";
  }

  //closing the file
  fclose($myfile);
?>