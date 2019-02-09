
<?php

//require Pc and Server to work
require_once ('Pc.php');
require_once ('Server.php');
require_once ('Laptop.php');

/**
 * factory class for Computer which return Computer according to the need
 */
class ComputerFactory 
{
    /**
     * static function get Computer to give the Computer according to type, ram, hdd, and cpu
     * @param type type of object passed 
     * @param ram ram value of the object passed
     * @param hdd hdd value of the object passed
     * @param cpu cpu value of the object passed
     * @return PC,Server,Laptop object according to the type passed otherwise returns null
     */
    public static function getComputer($type,$ram,$hdd,$cpu)
    {
        /**
        * else if ladder to check the type of the Computer and call the desired class constructor
        */
        if(strcasecmp("PC",$type)==0)
        { 
            //returns PC object
            return new PC($ram,$hdd,$cpu);
        }
        else if(strcasecmp("Server",$type)==0)
        {
            //returns Server object
            return new Server($ram,$hdd,$cpu);
        }
        else if(strcasecmp("laptop",$type)==0)
        {
            //returns Laptop object
            return new Laptop($ram,$hdd,$cpu);
        }
		return null;
	}
}
?>