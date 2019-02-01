<?php
/** StockPortfolio class that contains the stocks **/
class StockPortfolio
{
    //member variable
    public $stocks = null;
    
    //empty argument constructor
    public function __construct()
    {
        $this->stocks = null;
    }

    //memeber functions

    //function to set the member variable
    public function setStocks($stocks)
    {
        //variable points to passed array
        $this->stocks = $stocks;
    }

    //getter function to return variable
    public function getStocks()
    {
        //returns the array
        return $this->stocks;
    }

    //function to calculate the total stock value
    //returns the total value
    public function totalStockValue()
    {
        $total = 0;
        //looping over and getting each stock value to calculate total
        for($i=0;$i<count($this->stocks);$i++)
        {
            $total += $this->stocks[$i]->stockValue();
        }
        //returns total
        return $total;
    }
}
?>