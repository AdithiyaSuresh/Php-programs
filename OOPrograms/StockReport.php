<?php
/**
 * Program to print a Stock Report for diffrent stocks
 * @author Adithiya suresh
 * @since 09-01-2019
 */

//require the function below to work
require_once ('Utility.php');
require_once ('Stock.php');
require_once ('StockPortfolio.php');

//declaring an array
$stocks = array();
$i=0;

//taking no of stokes input
echo "enter the number of stocks\n";
$num = Utility::integer_Input();

//loopping over and taking user input values for each stock
while($num>0)
{
    //input for stock name
    echo "enter the stock name\n";
    $name = Utility::get_String();

    //input for number of shares
    echo "enter the number of shares\n";
    $numOfShares = Utility::integer_Input();

    //input for stock price
    echo "enter the share price\n";
    $price = Utility::number_Input();

    //creating a new stock object
    $stock = new Stock($name,$numOfShares, $price);

    //adding objects to array
    $stocks[$i++] = $stock;
    $num--;
}

//creating a StockPortfolio object
$stockPortfolio = new StockPortfolio();

//stockPortfolio now points to array
$stockPortfolio->setStocks($stocks);

//getting the array 
$l = $stockPortfolio->getStocks();
echo "\n";

//printing stock report
echo "**********Stock Report**********\n\n";
for($i=0;$i<count($l);$i++)
{
    //printing each stock value
    echo "Total value of ".$l[$i]->getName()." stock is ".$l[$i]->stockValue()."\n";
}
echo "\n";
//printing total stock value
echo "Total value of the stock is ".$stockPortfolio->totalStockValue()."\n";
?>