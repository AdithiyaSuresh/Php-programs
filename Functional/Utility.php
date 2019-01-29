<?php
class Utility
{
    public static function taking_string_input()
    { 
                                      
        
       fscanf(STDIN, "%s\n", $str);
       
        
            while((!(strlen($str)>=3)) || (is_numeric($str)))
            {                
                echo "enter a valid string \n";
                fscanf(STDIN, "%s\n", $str);
            }
            
            return $str;
    } 
    
    public static function string_replace($str1,$str2,$str3)
    {
         return (str_replace($str2,$str3,$str1));
    }
     
    public static function getint($num)
    {
        if(is_int($num))
        {
         return true;
        }
        else
        {
         return false;
        }
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
   
    public static function taking_number_input()
    {                               
        
       fscanf(STDIN, "%s\n", $num);
       while((!($num>0)) || (Utility::check_float($num)))
       {
         echo "enter a valid number ";
         $num = Utility::taking_number_input();
       }
        return $num;
    } 
   
    
    public static function flipcoin($num)
    {
        $tailcount = 0;
        $headcount = 0;
        for($i=0;$i<$num;$i++)
        {
            $x = mt_rand(0*10,1*10)/10;
            if($x<0.5)
            {
                $tailcount++;
            }
            else
            {
                $headcount++;
            }
        }
       
        echo "percentage of headcount = ".(int)(($headcount*100)/($headcount+$tailcount))."%\n";
        echo "precentage of tailcount = ".(int)(($tailcount*100)/($headcount+$tailcount))."%\n";
    }
        
        public static function get_year()
        {
            fscanf(STDIN, "%s\n", $year);
            while((Utility::check_float($year)) || (!(strlen($year)==4)) || (!(is_numeric($year))) || ($year<0))
            {
              echo "enter a valid year ";
              $year = Utility::get_year();
            }
             return $year; 
        }

        public static function leap_year($year)
        {
            if($year%4==0 && $year%100!=0 || $year%400==0)
            {
                return "leap year";
            }
            else
            {
                return "not leap year";
            }
        }
        public static function powerof2_input()
        {
            fscanf(STDIN, "%s\n", $num);
            while(!($num>=0 && $num<31) || (!(is_numeric($num))) || (Utility::check_float($num)))
            {
                echo "enter a valid number within 31";
                $num = Utility::powerof2_input();
            }
            return $num;
        }
       
       /* public static function check_integer_num($num)
        {
            if(is_numeric($num)&& is_int($num)===true)
            {
                return true;
            }
            else
            {
                return false;
            }
        }*/
        
        public static function power_of_2($num)
        {
            $x = 1;
            for($y=0;$y<=$num;$y++)
            {
                echo "2^".$y." = ".$x."\n";
                $x = $x*2;
            }
        }

        public static function harmonic_input()
        {
            fscanf(STDIN, "%s\n", $num);
            while((Utility::check_float($num)) || ($num==0) || (!(is_numeric($num))))
            {
                echo "enter a valid number";
                $num = Utility::harmonic_input();
            }
            return $num;
        }

        public static function Harmonic_Value($num)
        {
            $x = 1.0;
            for($y=2;$y<=$num;$y++)
            {
                $x = $x+(1/$y);
            }
            return $x;
        }

        public static function factor_Input()
        {
            fscanf(STDIN, "%s\n", $num);
            while((Utility::check_float($num)) || ($num==0) || (!(is_numeric($num))))
            {
                echo "enter a valid number ";
                $num = Utility::factor_Input();
            }
            return $num;
        }

        public static function is_Prime($num)
        {
           for($i=2;$i<=($num/2);$i++)
           {
               if($num%$i==0)
               return "no";
           }
               return "yes";
        }
        
        public static function prime_Factors($num)
        {
            if((Utility::is_Prime($num))=="yes")
            {
                echo "prime factors are ";
                echo $num;
            }
            else
            {
              echo "prime factors are ";
              while($num%2==0)
              {
                echo 2," ";
                $num = $num/2;
              }
              for($i=3;$i*$i<=$num;$i=$i+2)
              {
                while($num%$i==0)
                {
                    echo $i," ";
                    $num = $num/$i;
                }
              }
              if($num>2)
              {
                  echo $num;
              }
            }
        }

        public static function stake_Input()
        {
            fscanf(STDIN, "%s\n", $stake);
            while((Utility::check_float($stake)) || ($stake==0) || (!(is_numeric($stake))))
            {
                echo "enter a valid number";
                $stake = Utility::stake_Input();
            }
            return $stake;
        }

        public static function goal_Input($stake)
        {
            fscanf(STDIN, "%s\n", $goal);
            while((Utility::check_float($goal)) || ($goal<=$stake) || (!(is_numeric($goal))))
            {
                echo "enter a valid number";
                $goal = Utility::goal_Input($stake);
            }
            return $goal;
        }

        public static function no_Of_Times()
        {
            fscanf(STDIN, "%s\n", $num);
            while((Utility::check_float($num)) || (!(is_numeric($num))) || ($num==0) || ($num<0))
            {
                echo "enter a valid number ";
                $num = Utility::no_Of_Times();
            }
            return $num;
        }

        public static function gambler($stake,$goal,$num)
        {
            $win = 0;
            $loss = 0;
            while($stake>0 && $goal>$stake && $num>0)
            {
                if((mt_rand(0*10,1*10)/10)>0.5)
                {
                    $win++;
                    $stake++;
                }
                else
                {
                    $loss++;
                    $stake--;
                }
                $num--;
            }
            echo "no of win = ".$win."\n";
            echo "percentage of win ".(int)(($win*100)/($win+$loss))."%\n";
            echo "precentage of loss ".(int)(($loss*100)/($win+$loss))."%\n";
        }

        public static function coupon_Input()
        {
            fscanf(STDIN, "%s\n", $num);
            while((Utility::check_float($num)) || (!(is_numeric($num))) || ($num==0))
            {
                echo "enter a valid number ";
                $num = Utility::coupon_Input();
            }
            return $num;
        }

        public static function coupon_Numbers($num)
        {
            $arr = array();
            $i = 1;
            $arr[0] = mt_rand(1*10,10*10);
            $count = 1;
            
            while((sizeof($arr))!=$num)
            {
                $d = mt_rand(1*10,10*10);
                $count++;
                if(array_search($d,$arr)==false)
                {
                  $arr[$i] = $d;
                  $i++;  
                }
            }
            echo "Distinct numbers are ";
            for($x=0;$x<count($arr);$x++)
            {
                echo $arr[$x]." ";
            }
            echo "\ntotal random no needed to generate distinct coupons are ".$count."\n";
        }

        public static function no_Of_Rows()
        {
            fscanf(STDIN, "%s\n", $rows);
            while((Utility::check_float($rows)) || (!(is_numeric($rows))) || ($rows==0))
            {
                echo "enter a valid number ";
                $rows = Utility::no_Of_Rows();
            }
            return $rows;
        }

        public static function no_Of_Cols()
        {
            fscanf(STDIN, "%s\n", $cols);
            while((Utility::check_float($cols)) || (!(is_numeric($cols))) || ($cols==0))
            {
                echo "enter a valid number ";
                $cols = Utility::no_Of_Cols();
            }
            return $cols;
        }
        public  $count=0;
        public  $count1=0;
        public static function array_Value($rows,$cols)
        {
            $count1=0;
            $arr = array(array());
            for($x=0;$x<$rows;$x++)
            {
                for($y=0;$y<$cols;$y++)
                {
                   fscanf(STDIN, "%s\n", $num);
                   $arr[$x][$y] = $num;
                   $count=strlen($arr[$x][$y]);
                  // echo "test".$count;
                    if($count1<$count)
                    {
                         $count1=$count;
                        
                    }                
                }
            }
            $count1=     $count1+1;
            for($x=0;$x<$rows;$x++)
            {
                for($y=0;$y<$cols;$y++)
                {

                   echo $arr[$x][$y];
                   $print=$count1-strlen($arr[$x][$y]);
                   for($m=0;$m<$print;$m++)
                   {    
                    echo " ";
                   }
                }
                echo "\n";
            }
           
          // return $arr;
        }

        // public static function array_Print($arr,$rows,$cols)
        // {
        //     echo "arraru_print ".$count1."----------";
        //     for($x=0;$x<$rows;$x++)
        //     {
        //         for($y=0;$y<$cols;$y++)
        //         {

        //            echo $arr[$x][$y]." ";
        //         }
        //         echo "\n";
        //     }
        // }

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

        public static function array_Input($num)
        {
            $arr = array($num);
            for($x=0;$x<$num;$x++)
            {
                $value = Utility::integer_Input();
                $arr[$x] = $value;
            }
            return $arr;
        }

        public static function three_Integer($arr)
        {
            $count = 0;
            for($x=0;$x<sizeof($arr);$x++)
            {
                for($y=$x+1;$y<sizeof($arr);$y++)
                {
                    for($z=$y+1;$z<sizeof($arr);$z++)
                    {
                      if(($arr[$x]+$arr[$y]+$arr[$z])==0)
                      {
                          $count++;
                          echo "set of numbers ".$arr[$x].",".$arr[$y].",".$arr[$z]."\n";
                      }
                    }
                }
            }
            echo "no of triplets found is ".$count."\n";
        }

        public static function distance($x,$y)
        {
            $d = (($x*$x)+($y*$y));
            $d = sqrt($d);
            return $d;
        }
        public static function get_String()
        {
            fscanf(STDIN, "%s\n", $str);
            return $str;
        }

        public static function permute($str,$first,$last) 
        {
          if ($first == $last)
          {
            echo $str."\n";
          }
          else 
          {
            for ($j=$first;$j<$last;$j++) 
            {
                $str = Utility::swap($str,$first,$j);
                Utility::permute($str, $first+1, $last);
                $str = Utility::swap($str,$first,$j); 
            }
          }
        }
    
        public static function swap($str,$i,$j) 
        {
            $temp = $str[$i];
            $str[$i] = $str[$j];
            $str[$j] = $temp;
            return $str;
        } 
        
        public static function stop_Watch()
        {
            $flag = true;
            while($flag)
            {
                echo "enter 1 to start the stopwatch and 0 to stop it ";
                fscanf(STDIN, "%s\n", $i); 
                while($i!='0' && $i!='1')
                {
                echo "enter a valid input ";
                fscanf(STDIN, "%d\n", $i); 
                }
                if($i=='1')
                {
                    $start = time();
                    $flag = true;
                }
                else if($i=='0')
                {
                    $stop = time();
                    $flag = false;
                }
            }
            echo "time elapsed between start and end is ".($stop-$start)."seconds\n";
        }

        public static function find_Roots($a,$b,$c)
        {
            if($a==0)
            {
                echo "not a quadratic equation\n";
            }
            else
            {
                $delta = ($b*$b)-(4*$a*$c);
                if($delta>0)
                {
                    echo "roots are unequal\n";
                    $x = (-$b + sqrt($delta))/(2*$a);
                    $y = (-$b - sqrt($delta))/(2*$a);
                    echo "first root is ".$x."\n";
                    echo "second root is ".$y."\n";
                }
                else if($delta==0)
                {
                    echo "roots are equal\n";
                    $x = (-$b + sqrt($delta))/(2*$a);
                    echo "root is ".$x."\n";
                }
                else if($delta<0)
                {
                    echo "roots are complex\n";
                    $x = (-$b/(2*$a));
                    $y = sqrt(-$delta)/(2*$a);
                    echo "first root is ".$x."+".$y."i\n";
                    echo "second root is ".$x."-".$y."i\n";
                }
            }
        }
       
        public static function temp_Input()
        {
            fscanf(STDIN, "%s\n", $temp);
            while((float)($temp)>50 || (!(is_numeric($temp))))
            {
                echo "enter a valid number ";
                $temp = Utility::temp_Input();
            }
            return $temp;
        }

        public static function speed_Input()
        {
            fscanf(STDIN, "%s\n", $speed);
            while( (float)($speed)<3 || (float)($speed)>120 || (!(is_numeric($speed))))
            {
                echo "enter a valid number ";
                $speed = Utility::speed_Input();
            }
            return $speed;
        }
        
        public static function wind_Chill($temp,$speed)
        {
            $res = 35.74+(0.6215*$temp)+(0.4275*$temp-35.75)*(pow($speed,0.16));
            return $res;
        }
}
?>