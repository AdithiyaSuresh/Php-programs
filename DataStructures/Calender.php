<?php
/**
 * Program that takes the month and year as command-line arguments and
 * prints the Calendar of the month.
 * 
 * @author Adithiya suresh
 * @since 09-01-2019
 */

//require function in utility.php files
require ("Utility.php");

/**
 * Function to Run the Program
 */
function calender()
{
    //Taking Month And Year from user
    echo "Enter Month btw 1 t0 12 : ";
    $month = Utility::integer_Input();

    //validating month
    while ($month > 12) 
    {
        echo "warning : enter correct month\n";
        $month = Utility::integer_Input();
    }

    echo "Enter Year greater than 1000 and less than 9999 : ";
    $year = Utility::integer_Input();

    //validating year
    while ($year < 1000 ||$year > 9999) 
    {
        echo "warning : enter correct year\n";
        $year = Utility::integer_Input();
    }

    //creating an array with all the month as elements with index starting from 0
    $arrYear=array("jan","feb","march","april","may","june","july","aug","sep","oct","nov","dec");
    //initializing 2D aray
    $cal = Utility::initArray();
    //Calculating the starting day of the month
    $start = Utility::day_of_week_cal(1, $month, $year);
    //Calculating the ending day of the month
    $end = Utility::calTotal($month, $year);
    //calling the custom function to fill 2d array with appropriate day
    $cal = Utility::arrayFill($start, $cal, $end);
    echo "\n";
    echo " Month : ".$arrYear[$month -1]." --- Year : ".$year."\n";
    echo "\n";
    //printing the calender
    Utility::printCal($cal);
    
}

//calling the function
calender();
?>