<?php
/**
 * set top level error handler function to handle in case of error occurence
 * 
 */
set_error_handler(function ($errno, $errstr, $error_file, $error_line) 
{
    echo "!!!!Error Occured!!!!!!!\n";
    echo "Error: [$errno] $errstr - $error_file:$error_line \n";
    echo "Terminating!!!!!!!!!\n";
    die();
});

//require the files from the below files
require ("Utility.php");
require_once ('StockData.php');

function menu($account)
{
    $ch = 0;
    while($ch!=5)
    {
        //menu shown to the user
        echo "*************Commercial Data Processing*************\n";
        echo "Enter 1 to create a new stock account from the file\n";
        echo "Enter 2 to buy New Stock from the StockList\n";
        echo "Enter 3 to Sell Stocks\n";
        echo "Enter 4 to Print Stock Report\n";
        echo "Enter 5 to save the account and exit\n";
        $ch = Utility::integer_Input();
        //switch case to run according to condition
        switch ($ch) 
        {
            case 1 :    $newAccount = $account;
                        echo "New stock account is \n";
                        //to print the new account
                        Utility::printAccount($account);
                        echo "\n";
                        break;

            case 2 :
                        //calling function to buy a share and adding to account
                        $account = Utility::buy($account);
                        echo "\n\n";
                        break;
            case 3 :
                        //calling function to sell share from account
                        $account = Utility::sell($account);
                        echo "\n\n";
                        break;
            case 4 :
                        //printing the report
                        echo "Printing the stock account details of customer\n\n";
                        Utility::report($account);
                        break;
            case 5 : 
                        echo "Account Saved to file\n";
                        break;
           default :
                        echo "enter a valid option\n";
                        break;
        }
    }
}


//checking the user account
$account = json_decode(file_get_contents("Account.json"));
//calling the user input
menu($account);
?>
