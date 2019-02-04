
    <?php
    require_once ('Player.php');
    require_once ('Person.php');

    /**
     * Helper Function containing methods to use in othere php class
     * @author Adithiya suresh
     * @since 09-01-2019
     */
    class Utility
    {
        //function to read the json and to decode it
        //returns object
        public static function read_Json($file)
        {
            //reading the json from the file and storing it
            $fileStr = file_get_contents($file);

            //decoding the json to get the object as associative array
            $jsonData = json_decode($fileStr,true);
            
            return $jsonData;
        }

        public function read_Json_Object($file)
        {
            return json_decode(file_get_contents($file));
        }

        //function to print the value of every inventory
        public static function inventory_Value($inventoryObject)
        {
            //declaring an array with each inventory as values
            $arr = ['Rice','Pulses','Wheats'];

            //looping over to get each inventory ie key of inventory object
            for($i=0;$i<count($arr);$i++)
            {
                //looping over to get each values of inventory object
                foreach($inventoryObject[$arr[$i]] as $value)
                {
                    //printing inventory details
                    echo "The value of ".$value['name']." is ".($value['weight']*$value['price'])." Rs\n";
                }
                echo "\n";
            }
        }

        //function to get the json string from the inventory object
        //returns the json string
        public static function json_String($inventoryObject)
        {
            //encoding the inventory object to get the json string
            $json = json_encode($inventoryObject);
            return $json;
        }

        //function to get one word string input
        //returns string
        public static function string_Input()
        {                               
            //taking input from user
            $str = readline(" ");
            //validation for one word string
            while((!(strlen($str)>0)) || (count(explode(" ",$str))>1) || (!preg_match("/^[a-zA-Z ]*$/",$str)))
                {                
                    echo "enter a valid string \n";
                    //calling function again if in case not valid
                    $str = Utility::string_Input();
                }
            return $str;
        } 

        //function to get two word string input
        //returns string
        public static function two_String_Input()
        {                               
            //taking input from user
            $str = readline(" ");
            //validation for two word string
            while((count(explode(" ",$str))<2) || (!preg_match("/^[a-zA-Z ]*$/",$str)))
                {                
                    echo "enter a valid string \n";
                    //calling function again if in case not valid
                    $str = Utility::two_String_Input();
                }
            return $str;
        } 

        //function to get the phone num in a specified format
        //returns phone num
        public static function phone_Num()
        {
            //taking input from user
            $str = readline(" ");
            //validation for phone num
            while(!(preg_match("/^[0-9]{2}-[0-9]{10}$/", $str)))
                {                
                    echo "enter a valid number \n";
                    //calling function again if in case not valid
                    $str = Utility::phone_Num();
                }
            return $str;
        }

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

        //function to get an integer input
        //returns an integer
        public static function integer_Input()
        {
            fscanf(STDIN, "%s\n", $num);
            //validating the integer input
            while((Utility::check_float($num)) || (!(is_numeric($num))) || ($num<0))
            {
                echo "enter a valid number ";
                //calling function again if in case not valid
                $num = Utility::integer_Input();
            }
            return $num;
        }

        /**
         * function to validate integer input from the user and ask the user until proper input is fount and return it
         * @param int the value to verify as int
         * @param min the minimum value of the integer
         * @param max the maximum value of the integer
         * @return int the valid int in that range 
         * 
         */
        public function validInt($int, $min, $max)
        {
            while (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) 
            {
                echo ("Variable value is not within the legal range\n");
                echo "enter again : ";
                $int = Utility::integer_Input();
            }
            return $int;
        }

        //function to get the string input
        public static function get_String()
        {                               
            
        fscanf(STDIN, "%s\n", $str);
            
            //validating the string input
            while((!(strlen($str)>0)) || (is_numeric($str)) || ($str==null))
            {                
                echo "enter a valid string \n";
                //calling function again if in case not valid
                $str = Utility::get_String();
            }
            return $str;
        } 

        //function to take positive number input
        public static function number_Input()
        {                               
            fscanf(STDIN, "%s\n", $num);
            //validation for positive number
            while(($num<0) || (!(is_numeric($num))))
            {
                echo "enter a valid number ";
                //calling function again if in case not valid
                $num = Utility::number_Input();
            }
            return $num;
        } 

        //function to do insertion sort for array
        //param - array and length of array
        //returns sorted array
        public static function insertion_Sort_Str($arr,$num)
        {
            //looping over and comparing two strings from front and back
            for($i =1 ;$i <$num ;$i++)
            {
                for($j =$i ;$j > 0 ;$j--)
                {
                    //comparing two strings
                    if(strcmp($arr[$j-1],$arr[$j])>0)
                    {
                        //re-arranging the positions
                        $temp = $arr[$j -1];
                        $arr[$j-1] = $arr[$j];
                        $arr[$j] = $temp;
                    }
                
                }

            }
            return $arr;
        }

        /**
        * function to create person objest by asking value from console
        * @param addressbook  the array of addressbook to store created person object
        */
        public static function createPerson(&$addressBook)
        {
            //reference var person to store the person object
            $person = new Person();
            
            //asking user for input for the person object
            echo "Enter Firstname \n";
            $person->fname = Utility::get_String();
            echo "Enter Lastname \n";
            $person->lname = Utility::get_String();
            echo "Enter State\n";
            $person->state = Utility::get_String();
            echo "Enter City\n";
            $person->city = Utility::get_String();
            echo "Enter Zip of $person->city\n";
            $person->zip = Utility::validInt(Utility::integer_Input(), 100000, 10000000);
            echo "Enter Address\n";
            $person->address = Utility::get_String();
            echo "Enter Mobile Number \n";
            $person->phone = Utility::validInt(Utility::integer_Input(), 1000000000, 10000000000);
           
            //adding it to the array address book
            $addressBook[] = $person;
           
            //returning the array
            return $addressBook;
        }

        /**
        * function to edit the details of a person
        * @param the person object to edit the details
        */
        public static function edit(&$person)
        {
            //printing the choice for the user 
            echo "Enter 1 to change Address\n";
            echo "Enter 2 change Mobile Number\n";

            //taking the choice from user
            $choice = Utility::integer_Input();

            //switch case for the choice
            switch ($choice) 
            {
                case '1':
                            //enters this case if user wants to edit address
                            //taking inputs to edit and make changes
                            echo "Enter State\n";
                            $person->state = Utility::get_String();
                            echo "Enter City\n";
                            $person->city = Utility::get_String();
                            echo "Enter Zip of $person->city\n";
                            $person->zip = Utility::validInt(Utility::integer_Input(), 100000, 10000000);
                            echo "Enter Address\n";
                            $person->address = Utility::get_String();
                            echo "Address changes succesfully \n";

                            //returning person object after changes
                            return $person;
                            break;
                case '2':
                            //enters this case if user wants to edit mobile number
                            //taking inputs to edit and make changes
                            echo "Enter Mobile Number \n";
                            $person->phone = Utility::validInt(Utility::integer_Input(), 1000000000, 10000000000);
                            echo "Moble no changed succesfully\n";

                            //returning person object after changes
                            return $person;
                            break;
                default:
                            break;
            }
        }

        /**
        * Function to delete the object of person from the array
        */
        public static function delete(&$arr)
        {
            //getting object index to delete
            $i = Utility::search($arr);
            if ($i > -1) 
            {
                //if present deleting object from the address array
                array_splice($arr, $i, 1);
                echo "Entry Deleted\n";
            } 
            else 
            {
                echo "Entry Not Found\n";
            }
        }

        /**
        * function tosearch the array for specific person and return the index of person or -1 if not found
        * @param arr the array containig person from which to search
        * @return index of the searched item or -1 if not found
        */
        public static function search(&$arr)
        {
            //taking first an last name to search
            echo "Enter firstname to search\n";
            $fname = Utility::get_String();
            echo "Enter last name\n";
            $lname = Utility::get_String();

            //looping over the array and returning the index of person object is name matches
            for ($i = 0; $i < count($arr); $i++) 
            {
                if ($arr[$i]->fname == $fname) 
                {
                    if ($arr[$i]->lname == $lname) 
                    {
                        return $i;
                    }
                }
            }
            return -1;
        }

        /**
        * function to print the addressbokk as a mailing format
        */
        public static function printBook($arr)
        {
            foreach ($arr as $person) 
            {
                //printing each person details in the adress book
                echo sprintf("%s %s\n%s\n%s, %s\nZip - %u\nMobile- %u\n\n", $person->fname, $person->lname, $person->address, $person->city, $person->state, $person->zip , $person->phone);
            }
        }

        /**
        * function to sort the array by person object property
        * 
        * @param arr the array containig person object to sort
        * @param  prop the property for which to sort
        */
        public static function sortBook(&$arr , $prop)
        {
            for ($i = 1; $i < count($arr); $i++) 
            {
                // getting value for back element
                $j = ($i - 1);
               
                //saving it in temperary variable;
                $temp = $arr[$i];
                
                //looping over to compare the memeber variable of object to sort it
                while ($j >= 0 && $arr[$j]->{$prop} >= $temp->{$prop}) 
                {
                    $arr[$j + 1] = $arr[$j];
                    $j--;
                }
                $arr[$j + 1] = $temp;
            }
        }

        /**
        * function to save passed addrees book in json file 
        * @param arr the array containing the person object ie addressbook to save in the file
        */
        public static function save(&$addressBook)
        {
            //writing the encoded json string back to the file
            file_put_contents("AddressBook.json", json_encode($addressBook));
        }
    }

    ?>