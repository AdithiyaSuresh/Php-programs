<?php
class Utility
{
    public static function is_anagram($string_1, $string_2) 
    { 
        if (count_chars($string_1, 1) == count_chars($string_2, 1)) 
            return true; 
        else 
            return false;        
    } 
   
    public static function check_float($num)
    {
        if(is_numeric($num) && strpos($num,'.'))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public static function integer_Input()
    {
        fscanf(STDIN, "%s\n", $num);
        while((Utility::check_float($num)) || (!(is_numeric($num))))
        {
            echo "enter a valid number ";
            $num = Utility::integer_Input();
        }
        return $num;
    }

    public static function is_Prime($num)
    {
        $num = abs($num);
       for($i=2;$i<=($num/2);$i++)
       {
           if($num%$i==0)
           return false;
       }
           return true;
    }

    public static function prime_Range($startRange,$endRange)
    {
      $arr = array();
      $i = 0;
      for($x=$startRange;$x<$endRange;$x++)
      {
          if(Utility::is_Prime($x))
          {
              if(abs($x)!=0 && abs($x)!=1)
              {
                $arr[$i++]= $x;
              }
          }
      }
      return $arr;
    }

    public static function prime_Anagram($arr)
    {
        $l = count($arr);
        $anagram = false;
        for($x=0;$x<$l;$x++)
        {
            for($y=$x+1;$y<$l;$y++)
            {
               $anagram =  utility::is_anagram($arr[$x],$arr[$y]);
               if($anagram)
               {
                   echo "anagram pairs are ".$arr[$x].",".$arr[$y]."\n";
               }
            }
        }
    }

    public static function is_Palindrome($str)
    {
        $str = $str."";
        $str2 = "";
        for($x=(strlen($str)-1);$x>=0;$x--)
        {
            $str2 = $str2.$str[$x];
        }
        if(strcasecmp($str,$str2)==0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
   

    public static function prime_Palindrome($arr)
    {
        $l = count($arr);
        for($x=0;$x<$l;$x++)
        {
            $x1=$arr[$x];
            if(Utility::is_Palindrome($x1))
            {
                echo $arr[$x]." is palindrome\n";
            }
        }
    }

    //Binary search for integer 
    public static function binary_Search_Int($arr,$start,$end,$num)
    {
        sort($arr);
        while($end>=$start)
        {
            $mid = floor($start + ($end - $start) / 2); 
            if($arr[$mid]==$num)
            {
                return true;
            }
            else if($arr[$mid]>$num)
            {
                $end = $mid-1;
            }
            else
            {
                $start = $mid+1;
            }
        }
        return false;
    }
    public static function time_Elapsed_Binary($arr,$num)
    {
      $start = 0;
      $arr1 = $arr;
      $end = count($arr)-1;
      $num1 = $num;
      $starttime = microtime(true);
      if(Utility::binary_Search_Int($arr1,$start,$end,$num1))
      {
          echo"\n";
          echo "number found\n";
      }
      else
      {
          echo "\n";
          echo "number not found\n";
      }
      $stop = microtime(true);
      $time = $stop-$starttime;
      return $time;
    }

    public static function time_Elapsed_Insertion($arr,$num)
    {
      $start = 0;
      $arr1 = $arr;
      $end = count($arr)-1;
      $num1 = $num;
      $starttime = microtime(true);
      $arr = Utility::insertion_sort_num($arr, $num);
      echo "sorted array is\n";
      echo implode(",",$arr)."\n";
      $stop = microtime(true);
      $time = $stop-$starttime;
      return $time;
    }

    public static function time_Elapsed_Bubble($arr,$num)
    {
      $start = 0;
      $arr1 = $arr;
      $end = count($arr)-1;
      $num1 = $num;
      $starttime = microtime(true);
      $arr = Utility::bubble_sort_num($arr, $num);
      echo "sorted array is\n";
      echo implode(",",$arr)."\n";
      $stop = microtime(true);
      $time = $stop-$starttime;
      return $time;
    }
    //Binary search for string 
    public static function binary_Search_String($arr,$start,$end,$str)
    {
        sort($arr);
        while($end>=$start)
        {
            $mid = floor($start + ($end - $start) / 2); 
            if(strcmp($arr[$mid],$str)==0)
            {
                return true;
            }
            else if(strcmp($arr[$mid],$str)>0)
            {
                $end = $mid-1;
            }
            else
            {
                $start = $mid+1;
            }
        }
        return false;
    }

    public static function insertion_sort_str($arr,$num)
    {
        for($i =1 ;$i <$num ;$i++)
        {
            for($j =$i ;$j > 0 ;$j--)
            {
                if(strcmp($arr[$j-1],$arr[$j])>0)
                {
                    $temp = $arr[$j -1];
                    $arr[$j-1] = $arr[$j];
                    $arr[$j] = $temp;
                }
            
            }

        }
        return $arr;
    }

    public static function insertion_sort_num($arr, $num)
    {


        for($i =1 ;$i <$num ;$i++)
        {
            for($j =$i ;$j > 0 ;$j--)
            {
                if($arr[$j-1] > $arr[$j])
                {
                    $temp = $arr[$j -1];
                    $arr[$j-1] = $arr[$j];
                    $arr[$j] = $temp;
                }
            
            }

        }
        return $arr;
    }

    public static function bubble_sort_num($arr, $num)
    {

        for($i =1 ;$i < $num ;$i++)
        {
            for($j = 1 ;$j < $num ;$j++)
            {
                if($arr[$j-1] > $arr[$j])
                {
                    $temp = $arr[$j -1];
                    $arr[$j-1] = $arr[$j];
                    $arr[$j] = $temp;
                }
            
            }

        }
        return $arr;
    }

    public static function bubble_sort_str($arr, $num)
    {

        for($i =1 ;$i < $num ;$i++)
        {
            for($j=1;$j<$num;$j++)
            {
                if(strcmp($arr[$j-1],$arr[$j])>0)
                {
                    $temp = $arr[$j -1];
                    $arr[$j-1] = $arr[$j];
                    $arr[$j] = $temp;
                }
            
            }

        }
        return $arr;
    }

    public static function array_Input($num)
    {
        $arr = array($num);
        for($x=0;$x<$num;$x++)
        {
            $value = Utility::string_Input();
            $arr[$x] = $value;
        }
        return $arr;
    }

    public static function array_Input_Num($num)
    {
        $arr = array($num);
        for($x=0;$x<$num;$x++)
        {
            $value = Utility::integer_Input();
            $arr[$x] = $value;
        }
        return $arr;
    }

    public static function string_Input()
    {                               
        
       fscanf(STDIN, "%s\n", $str);
       while((!(strlen($str)>0)) || (is_numeric($str)))
            {                
                echo "enter a valid string \n";
                $str = Utility::string_Input();
            }
        return $str;
    } 

    public static function is_Power_Of_2($num)
    {
        if(is_numeric($num)&&(!(Utility::check_float($num))))
        {
            while($num%2==0)
            {
            $num = $num/2;
            }
            if($num==1)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
             return false;
        }
    }

    public static function number()
    {
        fscanf(STDIN, "%s\n", $num);
        while(!(Utility::is_Power_Of_2($num)))
            {                
                echo "enter a valid number\n";
                $num = Utility::number();
            }
        return $num;
    }

    public static function find_Number($num)
    {
       $arr = array();
       for($x=0;$x<$num;$x++)
       {
           $arr[$x]=$x;
       }
       echo "think of a number in the range 0 to ".($num-1)."\n";
       $start = 0;
       $end = $num-1;
       while($end>=$start)
       {
           $mid = floor($start + ($end - $start) / 2); 
           if($end==$start)
           {
               echo "your number is ".$arr[$start]."\n";
               break;
           }
           else
           {
               echo "is your number greater or equal to or less than ".$arr[$mid]."\n";
               echo "enter y for greater, n for lesser and e for equal\n";
               fscanf(STDIN, "%s\n", $str);
               if($str=='e')
               {
                echo "your number is ".$arr[$mid]."\n";
                break;
               }
               else if($str=='y')
               {
                  $start = $mid+1;
               }
               else
               {
                  $end = $mid-1;
               }
           }
       }
    }

    public static function merge_sort($my_array){
        if(count($my_array) == 1 )
        { 
            return $my_array;
        }
        else
        {
            $mid = count($my_array) / 2;
            $left = array_slice($my_array, 0, $mid);
            $right = array_slice($my_array, $mid);
            $left = Utility::merge_sort($left);
            $right = Utility::merge_sort($right);
            return Utility::merge($left, $right);
        }
    }
    public static function merge($left, $right){
        $res = array();
        while (count($left) > 0 && count($right) > 0){
            if(strcmp($left[0],$right[0])>0)
            {
                $res[] = $right[0];
                $right = array_slice($right , 1);
            }
            else
            {
                $res[] = $left[0];
                $left = array_slice($left, 1);
            }
        }
        while (count($left) > 0){
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }
        while (count($right) > 0){
            $res[] = $right[0];
            $right = array_slice($right, 1);
        }
        return $res;
    }

    public static function temperaturConversion($temp,$num)
    {
        if($num==1)
        {
            $res =($temp-32)*5/9;     
        }
        else
        {
            $res =($temp*9/5)+32;
        }
        return $res;
    }

    public static function sqrt_Input()
    {
        fscanf(STDIN, "%s\n", $num);
        while(Utility::check_float($num) || ($num<=0) || (!(is_numeric($num))))
        {
            echo "enter a valid number ";
            $num = Utility::sqrt_Input();
        }
        return $num;
    }

    public static function square_Root($c)
    {
       $epsilon = 1e-15;
       $t = $c;
       while(abs($t - $c/$t) > $epsilon*$t )
       {
            $t = (($c/$t)+$t)/2; 
       }
       return $t;
    }
}
?>