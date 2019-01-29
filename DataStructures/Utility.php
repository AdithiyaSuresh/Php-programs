<?php
/**
 * Helper Function containing methods to use in othere php class
 **/

 require_once ('LinkedListStack.php');
require_once ('LinkedList.php');
require_once ('Queue.php');
class Utility
{
    //function to check whether the number is float
    //returns boolean value
    public static function check_float($num)
    {
        //should be numeric and should have decimal point
        if(is_numeric($num) && strpos($num,'.'))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //function to get the string input
    public static function string_Input()
    {                               
        
       fscanf(STDIN, "%s\n", $str);
       
       //validating the string input
       while((!(strlen($str)>0)) || (is_numeric($str)) || ($str==null))
            {                
                echo "enter a valid string \n";
                $str = Utility::string_Input();
            }
        return $str;
    } 

    //function to get an integer input
    public static function integer_Input()
    {
        fscanf(STDIN, "%s\n", $num);
       
        //validating the integer input
        while((Utility::check_float($num)) || (!(is_numeric($num))))
        {
            echo "enter a valid number ";
            $num = Utility::integer_Input();
        }
        return $num;
    }

    //function to check whether a number is prime
    //return a boolean value
    public static function is_Prime($num)
    {
        //to get the positive value
        $num = abs($num);
       for($i=2;$i<=($num/2);$i++)
       {
           if($num%$i==0)
           return false;
       }
           return true;
    }

    /**
     * Function to get the prime no between 0-$range 
     * @param range the range between which to find the numbers
     **/
    public static function prime_Range($startRange,$endRange)
    {
        //initializing an empty array
      $arr = array();
      $i = 0;
      for($x=$startRange;$x<$endRange;$x++)
      {
          //checking whether number is prime
          if(Utility::is_Prime($x))
          {
              //to get the positive value
              if(abs($x)!=0 && abs($x)!=1)
              {
                $arr[$i++]= $x;
              }
          }
      }
      //returning array with prime numbers
      return $arr;
    }

    //function to get the staring day of a month
    //accept parameters month,year and the date to find day
    public static function day_of_week_cal($d, $m, $y)
    {
        $y1 = floor($y - (14 - $m) / 12) + 1;

        $x = floor($y1 + floor($y1/4) - floor($y1/100) + floor($y1/400));

        $m1 = ($m +12 * floor(((14 - $m) / 12)) - 2 );

        $d1 = floor(($d + $x +floor(( 31 * $m1) / 12)) % 7 );

        return $d1;
    }

    //function to check the leap year
    //return boolean value
    public static function leapYear($year)
    {
        if(($year %4 ==0) && (($year % 100 == 0) || ($year % 400==0)))
        {
            return true;
        }
        else
        {
            return false;
        }
        

    }

    /**
     * Function to print the 2d array as a calender
     * 
     * @param Array2D A 2d array containing calender
     */
    Public static function printCal($arr)
    {
        echo "Sun   Mon   Tue   Wed   Thu   Fri   Sat\n";
        for ($i = 0; $i < 6; $i++) 
        {
            for ($j = 0; $j < 7; $j++) 
            {
                if ($arr[$i][$j] == '-' || $arr[$i][$j] > 31) 
                {
                    //replacing with spaces
                    echo "      ";
                } 
                else 
                {
                    if ($arr[$i][$j] < 10) 
                    {
                        //giving 4 space after single digit
                        echo $arr[$i][$j] . "     ";
                    } 
                    else 
                    {
                        //giving 3 space after two digit number
                        echo $arr[$i][$j] . "    ";
                    }
                }
            }
            echo "\n";
        }
    }

    /**
     * Function to initialize the array with values of calender
     * @param start starting day of the month
     * @param arr the array 2d
     * @param end the no of days in the month
     * @return arr the array containing calender
     */
    public function arrayFill($start, $arr, $end)
    {
        //taking count variable to fill the array
        $count = 1;
        for ($i = $start; $i < 7; $i++) 
        {
            //filling first line
            $arr[0][$i] = $count++;
        }
        for ($i = 1; $i < 6; $i++) 
        {
            //filling remaining lines
            for ($j = 0; $j < 7 && $count <= $end; $j++) 
            {
                $arr[$i][$j] = $count++;
            }
        }
        return $arr;
    }
    
    //function to print 2d array with each row within a arange
    public static function TwoDArray($arr)
    {
        $count=0;
        $count1=0;
        $arr2D = array(array());
        $index = 0;
        $n = 100;
        //array 0 to 10 because 10 line needed in between 0 to 1000
        for ($i=0; $i < 10; $i++) 
        { 
            $iArr = array();
            //array to save the value in inner array
            for ($j=0; $j < 100; $j++) 
            { 
            //if index reach size of array then break or when the value of index 
                //elemnet is greater than $n value break 
                if ($index == sizeof($arr) || $arr[$index]>$n )
                {
                    break;
                }
                $x = $arr[$index++];
                $iArr[$j] = $x;
                $count1 = strlen($x);
                if($count1>$count)
                {
                    $count = $count1;
                }
            }
            //after every loop increase by 100
            $n += 100;
            array_push($arr2D,$iArr);
        }
        $count = $count+1;
        // print all prime numbers as 2d array
        for ($row=0; $row < count($arr2D); $row++) 
        { 
            for ($col=0; $col < count($arr2D[$row]); $col++)
            { 
                echo $arr2D[$row][$col];
                //to give allignment between numbers
                $x = $count-strlen($arr2D[$row][$col]);
                for($y=0;$y<$x;$y++)
                {
                    echo " ";
                }
            }
            echo "\n";
        }
    }

    //function to check whether two numbers are anagrams
    public static function isAnagram($string_1, $string_2) 
    { 
        //count_chars()-returns an array with the ASCII value as key and number of occurrences as value
        if (count_chars($string_1, 1) == count_chars($string_2, 1)) 
            return true; 
        else 
            return false;        
    } 

    //function to get the prime numbers that are anagrams and non anagrams
    public static function prime_Anagram($arr)
    {
        $l = count($arr);
        //setting a boolean value to false
        $anagram = false;
        //initializing two array
        $ananArr = [];
        $nonAnanArr = [];
        for($x=0;$x<$l;$x++)
        {
            for($y=0;$y<$l;$y++)
            {
              if($x != $y)
              {
                //checking whether the number is anagram
                $anagram =  utility::isAnagram($arr[$x],$arr[$y]);
                if($anagram)
                {
                    //pushing anagram number into anagram array
                    array_push($ananArr,$arr[$x]);
                    break; 
                }
              }
            }
            if(!$anagram)
            {
                //pushing non anagram number into non anagram array
                array_push($nonAnanArr,$arr[$x]);
            }
        }
        echo "2d array is \n";
        echo "anagrams\n";
        //calling function to print anagram and non anagram as 2d array
        Utility::TwoDArray($ananArr);
        echo "\n";
        echo "non-anagrams\n";
        Utility::TwoDArray($nonAnanArr);
    }

    /**
 * Function to calculate the end of the month or no of days in the month
 * @param month Month in a year 1-12
 * @param year Year to which thw month is
 * 
 * @return days No of days in the month
 */
    public function calTotal($month, $year)
    {
        if ($month < 8) {
            if ($month % 2 == 0) {
                if ($month == 2) {
                    if (Utility::leapYear($year)) {
                        return 29;
                    }
                    return 28;
                }
                return 30;
            } else {
                return 31;
            }
        } else {
            if ($month % 2 == 0) {
                return 31;
            }
            return 30;
        }
    }

    public static function calenderStack($totalDays,$start)
    {
         //taking two stack one for weekdays and one for date
        $weekdays = new LinkedListStack();
        $dateq = new LinkedListStack();
        $arr = array("Sun", "Mon", "Tue", "Wen", "Thu", "Fri", "sat");
        
        //storing days in weekdays stack in reverse orderer
        for($i=count($arr)-1;$i>=0;$i--)
        {
            $weekdays->push($arr[$i]);
        }

        //storing dates in date stack in reverse orderer
        for( $i=$totalDays;$i>=1;$i--)
        {
            $dateq->push($i);
        }

        //printing the days
        for($i=0;$i<count($arr);$i++)
        {
            echo $weekdays->pop()."  ";
        }
        echo "\n";

        //printing space till the start date of calender 
        for ($i=0;$i<($start*5);$i++)
        {
            echo " ";
        }

        //printing the dates according to row
        for($i=1;$i<=$totalDays;$i++)
        {
            if($i<10)
            {
                echo(" ".$dateq->pop()."   ");
            }
            if($i>9)
            {
                echo("".$dateq->pop()."   ");
            }
            if((($start+$i)%7) ==0)
            {
                echo " \n";
            }

        }
    }

    public static function calenderQueue($totalDays,$start)
    {
        //taking two queue one for weekdays and one for date
        $weekdays = new Queue();
        $dateq = new Queue();
        $arr = array("Sun", "Mon", "Tue", "Wen", "Thu", "Fri", "sat");
        
        //storing days in weekdays queue
        for($i=0;$i<count($arr);$i++)
        {
            $weekdays->enqueue($arr[$i]);
        }

        //storing dates in date queue
        for( $i=1;$i<=$totalDays;$i++)
        {
            $dateq->enqueue($i);
        }

        //printing the days
        for($i=0;$i<count($arr);$i++)
        {
            echo $weekdays->dequeue()."  ";
        }
        echo "\n";

        //printing space till the start date of calender 
        for ($i=0;$i<($start*5);$i++)
        {
            echo " ";
        }

        //printing the dates according to row
        for($i=1;$i<=$totalDays;$i++)
        {
            if($i<10)
            {
                echo(" ".$dateq->dequeue()."   ");
            }
            if($i>9)
            {
                echo("".$dateq->dequeue()."   ");
            }
            if((($start+$i)%7) ==0)
            {
                echo " \n";
            }

        }
    }

    /**
     * initialing the 2d array with default values
     */
    public static function initArray()
    {
        $arr = [];
        for ($i = 0; $i < 6; $i++) 
        {
            $aa = array();
            for ($j = 0; $j < 7; $j++) 
            {
                //initializing array values to '-'
                $aa[$j] = '-';
            }
            //pushing array to each row of 2d array
            array_push($arr, $aa);
        }
        return $arr;
    }

    //function to print the prime anagrams using stack
    public static function stack_Anagram($arr)
    {
        $l = count($arr);
        $anagram = false;

        //initializing a stack
        $stack = new LinkedListStack();
        for($x=0;$x<$l;$x++)
        {
            for($y=0;$y<$l;$y++)
            {
                if($x != $y)
                {
                    //checking whether the number is anagram
                    $anagram = utility::isAnagram($arr[$x],$arr[$y]);
                    if($anagram)
                    {
                        //pushing anagrams to stack
                        $stack->push($arr[$x]); 
                    }
                }
            }
        }
        echo "prime anagrams in reverse order is\n";
        
        //printing the stack in reverse order
        $arr1 = $stack->getArray();
        for($x=count($arr1)-1;$x>=0;$x--)
        {
            echo $arr1[$x]." ";
        }
    }

    //function to print the prime anagrams using stack
    public static function queueAnagram($arr)
    {
        //initializing a queue
        $que = new Queue();
        for ($i = 0; $i < count($arr); $i++) 
        {
            for ($j = 0; $j < count($arr); $j++) 
            {
                if ($i != $j) 
                {
                    //checking whether the number is anagram
                    if (Utility::isAnagram($arr[$i], $arr[$j])) 
                    {
                        //pushing anagrams to queue
                        $que->enqueue($arr[$i]);
                        break;
                    }
                }
            }
        }
        echo "Anagrams in Queue Are  : \n \n";

        //printing the queue 
        while(!$que->isEmpty())
        {
        echo $que->dequeue()." ";
        }
        echo "\n";

    }
}
?>