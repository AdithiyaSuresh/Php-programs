<?php

class Utility
{
        //function to get the string input
        public static function taking_String_Input()
        { 
            //fscanf-to take the user input
            fscanf(STDIN, "%s\n", $str);
            while((!(strlen($str)>=3)) || (is_numeric($str)))
            {                
                echo "enter a valid string \n";
                fscanf(STDIN, "%s\n", $str);
            }
            return $str;
        } 
    
    
        //function to replace the string with user input
        public static function string_Replace($str1,$str2,$str3)
        {
            return (str_replace($str2,$str3,$str1));
        }

    
        //function to check whether the number is float
        public static function check_Float($num)
        {
            //checking whether number is numeric and have decimal point
            if(is_numeric($num) && strpos($num,'.'))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
   
        
        //function to take positive integer input
        public static function taking_Number_Input()
        {                               
        fscanf(STDIN, "%s\n", $num);
        //validation for positive integer
        while((!($num>0)) || (Utility::check_Float($num)))
        {
            echo "enter a valid number ";
            $num = Utility::taking_Number_Input();
        }
            return $num;
        } 
   
        // function to calculate head and tail percentage
        public static function flipCoin($num)
        {
            $tailcount = 0;
            $headcount = 0;
            for($i=0;$i<$num;$i++)
            {
                //getting the random number
                $x = mt_rand(0*10,1*10)/10;
                if($x<0.5)
                {
                    //incrementing tail count
                    $tailcount++;
                }
                else
                {
                    //incrementing head count
                    $headcount++;
                }
            }
            //printing the head and tail percentage count
            echo "percentage of headcount = ".(int)(($headcount*100)/($headcount+$tailcount))."%\n";
            echo "precentage of tailcount = ".(int)(($tailcount*100)/($headcount+$tailcount))."%\n";
        }
        
        //function to get the year
        //returns the year
        public static function get_Year()
        {
            fscanf(STDIN, "%s\n", $year);
            //validating the year
            while((Utility::check_Float($year)) || (!(strlen($year)==4)) || (!(is_numeric($year))) || ($year<0))
            {
                echo "enter a valid year ";
                $year = Utility::get_Year();
            }
                return $year; 
        }

        //function to check leap year
        //returns string
        public static function leap_Year($year)
        {
            //check for leap year
            if($year%4==0 && $year%100!=0 || $year%400==0)
            {
                return "leap year";
            }
            else
            {
                return "not leap year";
            }
        }
       
        //function to get the input ie as integer number within 0 and 31
        public static function powerOfTwoInput()
        {
            fscanf(STDIN, "%s\n", $num);
            //validating input
            while(!($num>=0 && $num<31) || (!(is_numeric($num))) || (Utility::check_Float($num)))
            {
                echo "enter a valid number within 31";
                $num = Utility::powerOfTwoInput();
            }
            return $num;
        }
       
        //function to print the power of 2 till a given range
        public static function power_Of_Two($num)
        {
            $x = 1;
            for($y=0;$y<=$num;$y++)
            {
                //printing power of 2
                echo "2^".$y." = ".$x."\n";
                $x = $x*2;
            }
        }

        // function to get the input to calculate the harmonic value
        public static function harmonic_Input()
        {
            fscanf(STDIN, "%s\n", $num);
            //validating input
            while((Utility::check_Float($num)) || ($num==0) || (!(is_numeric($num))))
            {
                echo "enter a valid number";
                $num = Utility::harmonic_Input();
            }
            return $num;
        }

        /** function to get the harmonic value of a given number
         * returns the number**/
        public static function harmonic_Value($num)
        {
            $x = 1.0;
            //calculating harmonic value
            for($y=2;$y<=$num;$y++)
            {
                $x = $x+(1/$y);
            }
            return $x;
        }

        //function to get the input for finding its factotrs
        //returns the number
        public static function factor_Input()
        {
            fscanf(STDIN, "%s\n", $num);
            //validating the number
            while((Utility::check_Float($num)) || ($num==0) || (!(is_numeric($num))))
            {
                echo "enter a valid number ";
                $num = Utility::factor_Input();
            }
            return $num;
        }

        //function to check whether the number is prime
        public static function is_Prime($num)
        {
           for($i=2;$i<=($num/2);$i++)
           {
               if($num%$i==0)
               return "no";
           }
               return "yes";
        }
        
        //function to calculate the prime factors
        public static function prime_Factors($num)
        {
            //checking whether the number is prime and printing the prime factors
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
            while((Utility::check_Float($stake)) || ($stake==0) || (!(is_numeric($stake))))
            {
                echo "enter a valid number";
                $stake = Utility::stake_Input();
            }
            return $stake;
        }

        public static function goal_Input($stake)
        {
            fscanf(STDIN, "%s\n", $goal);
            while((Utility::check_Float($goal)) || ($goal<=$stake) || (!(is_numeric($goal))))
            {
                echo "enter a valid number";
                $goal = Utility::goal_Input($stake);
            }
            return $goal;
        }

        public static function no_Of_Times()
        {
            fscanf(STDIN, "%s\n", $num);
            while((Utility::check_Float($num)) || (!(is_numeric($num))) || ($num==0) || ($num<0))
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
            while((Utility::check_Float($num)) || (!(is_numeric($num))) || ($num==0))
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
            while((Utility::check_Float($rows)) || (!(is_numeric($rows))) || ($rows==0))
            {
                echo "enter a valid number ";
                $rows = Utility::no_Of_Rows();
            }
            return $rows;
        }

        public static function no_Of_Cols()
        {
            fscanf(STDIN, "%s\n", $cols);
            while((Utility::check_Float($cols)) || (!(is_numeric($cols))) || ($cols==0))
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
        }

        public static function integer_Input()
        {
            fscanf(STDIN, "%s\n", $num);
            while((Utility::check_Float($num)) || (!(is_numeric($num))))
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