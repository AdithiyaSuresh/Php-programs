<?php
 include 'Utility.php';
 echo "enter the string ";
 $str = Utility::get_String();
 $l = strlen($str);
 echo $l;
  permute1($str,0,$l);
  function permute1($str,$first,$last) 
  {
     if ($first == $last)
     {
         echo $str."\n";
     }
     else 
     {
          for ($j=$first;$j<$last;$j++) 
         {
            $str = swap1($str,$first,$j);
           // echo $str;
            permute1($str, $first+1, $last);
            $str = swap1($str,$first,$j); 
           // echo $str;
         }
     }
  }
  
  function swap1($str,$i,$j) 
  {
      $temp = $str[$i];
      $str[$i] = $str[$j];
      $str[$j] = $temp;
      return $str;
  }   
  
?>