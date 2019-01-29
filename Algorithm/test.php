<?php
include 'Utility.php';
//phpinfo();
//   include 'Utility.php';
//  /* echo "enter the start range ";
//   $arr = array("abc","def","fgh","ghi","ijk");
//   //sort($arr);
//   //print_r ($arr);
//   $l = count($arr)-1;
//   if(Utility::binary_Search_String($arr,0,$l,"ppp"))
//   {
//       echo "found";
//   }
//   else
//   {
//       echo "not found";
//   }*/
//   /*echo "enter the number where num = 2^n ";
//   fscanf(STDIN, "%d", $num);
//    is_Power_Of($num);
//    function is_Power_Of($num)
//     {
//         echo "123";
//         while($num%2==0)
//         {
//            $num = $num/2;
//            echo "s";
//         }
//         if($num==1)
//         {
//             echo "yes";
//         }
//         else
//         {
//             echo "no";
//         }
//     }
//     echo ((int)("sss")%2);*/
//    /*() echo "enter the no ";
//     fscanf(STDIN, "%s\n", $num);
//     while((!(Utility::integer_Input($num))) || ($num<0))
//     {
//         echo "enter a valid number ";
//         $num = Utility::integer_Input();
//     }
//     echo $num;*/
      
//     /*function is_anagram($string_1, $string_2) 
//     { 
//         if (count_chars($string_1, 3) == count_chars($string_2, 3)) 
//             return 'yes'; 
//         else 
//             return 'no';        
//     } 
  
//     // Driver code 
//     echo (is_anagram('PrOgrAm', 'grAmPrO')."\n"); 
//     echo (is_anagram('card', 'cbrd')."\n"); */
//     if(Utility::is_Palindrome("Malayalam"))
//     {
//         echo "yes";
//     }
//     else
//     {
//         echo "no";
//     }
   /* $arr = array(121,21,12,30,44,5,67,76,612,216,121);
    Utility::prime_Anagram($arr);
    Utility::prime_Palindrome($arr);*/
    $arr = array("aaa","def","zysss","aaaaa","ADD","gHI","AAA");
    $num = count($arr);
    $arr = Utility::bubble_sort_str($arr, $num);
    echo implode(",",$arr);
  ?>