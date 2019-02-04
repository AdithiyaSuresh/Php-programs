
<?php
/**
 * program that can be used to maintain an address book. An address book holds a collection of entries,
 * each recording a person's first and last names, address, city, state, zip, and phone number.
 * 
 * @author Adithiya Suresh
 */

//files containing important function to work
require ("Utility.php");
require_once ('Person.php');


/**
 * function act as a default menu for the program
 */
function menu($addressBook)
{
    //taking choice input 
    $ch = 0;

    //loop to continue the menu untill the user wants to come out
    while($ch!=7)
    {
        //printing the choices for the user to choose
        echo "\n*******MAIN MENU*******\n";
        echo "\n !!!!Address Book!!!!\n\n";
        echo "Enter 1 to add person\n";
        echo "Enter 2 to Edit a person\n";
        echo "Enter 3 to Delete a person\n";
        echo "Enter 4 to Sort and Display\n";
        echo "Enter 5 to search\n";
        echo "Enter 6 to save\n";
        echo "Enter 7 to exit\n";
        $ch = Utility::integer_Input();

        //switch case for the choices
        switch ($ch) 
        {
            case 1 :
                        //calling function to create a new person with all details for addressbook
                        Utility::createPerson($addressBook);
                        break;
            case 2 :
                        $k = 2;
                        //if search fails control enters inside the loop
                        while (($i = Utility::search($addressBook)) === -1) 
                        {
                            //asking user whether to exit or search again if search fails
                            echo "No entries Found\nenter 1 to exit to MENU or Else to search again\n";
                            fscanf(STDIN, "%s\n", $k);
                            if ($k == 1) 
                            {
                                //if input is one come out of while loop
                                break;
                            }
                        }
                        
                        //if input is one then showing the main menu again
                        if ($k == 1) 
                        {
                            break;
                        } 
                        else //else if search suceeds editing the person details
                        {
                            $addressBook[$i] = Utility::edit($addressBook[$i]);
                        }
                        break;
            case 3 :
                        //calling function to delete person details based on search
                        Utility::delete($addressBook);
                        break;
            case 4 :
                        //case to sort the adressbook by person name or zip
                        echo "Enter 1 to sort by Name\n";
                        echo "Enter 2 to sort by Zip\n";
                        echo "Else to Menu\n";

                        //taking user input
                        $c = Utility::integer_Input();

                        //if input is one then sorting addressbook by name
                        if($c == 1)
                        {
                            //calling function to sort by name
                            Utility::sortBook($addressBook , "fname");

                            //calling function to print sorted adressbook
                            Utility::printBook($addressBook);
                        }
                    
                        //if input is two then sorting adressbook by zip
                        else if($c == 2 )
                        {
                            //calling function to sort by name
                            Utility::sortBook($addressBook , "zip");

                            //calling function to print sorted adressbook
                            Utility::printBook($addressBook);
                        }
                        
                        else
                        {
                            break;
                        }
                        break;
            case 5 :
                        //case to search for a person's details
                        //calling function yo search
                        $i = Utility::search($addressBook);

                        //
                        if($i>-1)
                        {
                            $arr=[];
                            
                            //passing the index returned by the search function which gives the person object searched for
                            $arr[] = $addressBook[$i];
                            echo "\nsearch suceeded\n";
                            echo "person details are as follows\n\n";
                            
                            //printing the details of searched person
                            Utility::printBook($arr);
                        }
                        else
                        {
                            //if search fails
                            echo"person dtails not found\n";
                        }
                        break;
            case 6 :
                        //case to save all the changes made in addressbook
                        Utility::save($addressBook);
                        echo "\nsuccessfully saved\n";
                        break;
            case 7 :
                        //case to exit the main menu
                        echo "\n*****Exiting*****\n\n";
                        break;
           default : 
                        break;
        }
    }
}

//getting the object from json string
$arr = Utility::read_Json_Object("AddressBook.json");
//calling the menu function create and manipulate adress book
menu($arr);
?>
