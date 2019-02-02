
<?php
/**  program to Create InventoryManager to manage the Inventory **/

//require the InventoryFactory class to work
require_once ('InventoryFactory.php');

//Inventory manager class that manages the inventories
class InventoryManager
{
    //member variable list
    public $list = null;

    //empty argument construcrtor
    public function __construct()
    {
        $list = null;
    }

    //function to get the value of each inventory
    function inventory()
    {
        //instantiating inventoryfactory class
        $inventories = new InventoryFactory();

        //setting inventory objects
        $inventories->setInventoryObj();

        //getting the list of objects from inventoryfactory class
        $this->list = $inventories->getInventoryObj();
        $arr = $this->list;

        //passing the list and getting the inventory value
        $inventories->inventory_Value($arr);

        //getting back the json string from object
        $jsonString = Utility::json_String($this->list);
        echo $jsonString."\n";
    }
}

    //declaring global variable
    global $inventories;

    //instantiating inventorymanager class
    $manager = new InventoryManager();

    //calling its member function
    $manager->inventory();

?>