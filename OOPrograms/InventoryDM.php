
    <?php
    /**
     * Program for JSON Inventory Data Management of Rice, Pulses and Wheat
     * with properties name, weight, price per kg. 
     * @author Adithiya suresh
     * @since 09-01-2019
    */

    /**
     * set top level error handler function to handle in case of error occurence
     * 
    */
        set_error_handler(function ($errno, $errstr, $error_file, $error_line) {
        echo "!!!!Error Occured!!!!!!!\n";
        echo "Error: [$errno] $errstr - $error_file:$error_line \n";
        echo "Terminating!!!!!!!!!\n";
        die();
        });


    //require the function below to work
    require ('Utility.php');
        
        try
        {
            //declaring a name for file
            $file = 'inventoryDM.json';

            //passing file to get the inventory object
            $inventoryObject = Utility::read_Json($file);

            //calling function to print each inventory value
            echo "Value for each inventory is given below\n\n";
            Utility::inventory_Value($inventoryObject);

            //calling function to get back the json string and printing it
            echo "JSON string is\n\n";
            echo Utility::json_String($inventoryObject);
            echo "\n";
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }
    ?>