
<?php
/** class to hold the details of inventory objects **/

//require the function below to work
require ('Utility.php');

class InventoryFactory
{
    //member variables of InventoryFactory class
    public $inventories = null;
    
    //empty argument constructor
    public function __construct()
    {
        $this->inventories = null;
    }
    
    //memeber functions

    //function to set the member variable
    public function setInventoryObj()
    {
        //declaring a name for file
        $file = 'InventoryShare.json';

        //passing file to get the inventory object
        $inventoryObject = Utility::read_Json($file);

        //setting member variable
        $this->inventories = $inventoryObject;
    }

    //getter function to return value of member variable
    public function getInventoryObj()
    {
        //returning inventories
        return $this->inventories;
    }

    //function to print the value of every inventory
    public static function inventory_Value($inventoryObject)
    {
        $totalValue = 0;

        //declaring an array with each inventory as values
        $arr = ['Mobile','Tab','Laptop'];

        //looping over to get each inventory ie key of inventory object
        for($i=0;$i<count($arr);$i++)
        {
            echo "Inventory details of ".$arr[$i]." is below \n\n";

            //looping over to get each values of inventory object
            foreach($inventoryObject[$arr[$i]] as $value)
            {
                //printing inventory details
                echo "The inventory price of ".$value['name']." is ".($value['weight']*$value['price'])." Rs\n";

                //calculatong total value
                $totalValue += ($value['weight']*$value['price']);
            }
            echo "\n";
        }
        //printing total inventory value
        echo "Total price of inventory is ".$totalValue." Rs\n";
        echo "\n";
    }
}

?>