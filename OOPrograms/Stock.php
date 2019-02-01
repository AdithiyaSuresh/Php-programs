<?php
/** Stock class that contains name,number of shares and price of a stock **/
class Stock
{
 //member variables of stock class
 public $stockName = null;
 public $numberOfShares = 0;
 public $price = 0;

 //memeber functions

 //constructor to initialize values
  public function __construct($stockName,$numOfShares,$price)
  {
      //initializing member variable
        $this->stockName = $stockName;
        $this->numberOfShares = $numOfShares;
        $this->price = $price;
  }

  //getter function for stock name
  public function getName()
  {
      //returns stock name
      return $this->stockName;
  }

  //getter function for stock shares
  public function getNumberOfShares()
  {
      //returns stock shares
      return $this->numberOfShares;
  }

  //getter function for stock price
  public function getPrice()
  {
      //returns stock price
      return $this->price;
  }

  //getter function for stock value
  public function stockValue()
  {
      //calculates and returns stock value
      return ($this->getNumberOfShares() * $this->getPrice());
  }
}
?>