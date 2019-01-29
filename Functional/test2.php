<?php
/* include 'Utility.php';
 echo "enter";
 fscanf(STDIN, "%s\n", $num);
 if(Utility::check_float($num)==true)
 {
     echo "yes";
 }
 else
 {
     echo "no";
 }*/
 fscanf(STDIN, "%s\n", $num);
 $arr = array();
 $i = 1;
 $arr[0] = mt_rand(1*10,10*10)/10;
 $count = 1;
 $t=sizeof($arr);
 while($t!=$num)
 {
     //echo $num."\n";
     $d = mt_rand(1*10,10*10)/10;
     $count++;
     if(array_search($d,$arr)==false)
     {
       $arr[$i] = $d;
       $i++;  
       $t=sizeof($arr);
     }
 }
 echo "Distinct numbers are ";
 for($x=0;$x<count($arr);$x++)
 {
     echo $arr[$x]." ";
 }
 echo "\ntotal random no needed to generate distinct coupons are ".$count."\n";

?>