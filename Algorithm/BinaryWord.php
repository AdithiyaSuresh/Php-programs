<?php   
  include 'Utility.php';
  $myfile = fopen("file.txt","r") or die("Unable to open file!");
  $str = fread($myfile,filesize("file.txt"));
  $arr = explode(",",$str);
  echo "enter the word to be searched ";
  $str2 = Utility::string_Input();
  if(Utility::binary_Search_String($arr,0,(count($arr)-1),$str2))
  {
      echo "word found\n";
  }
  else
  {
      echo "word not found\n";
  }
  fclose($myfile);
?>