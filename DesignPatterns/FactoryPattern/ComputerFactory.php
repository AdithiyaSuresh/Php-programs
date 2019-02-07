
<?php
require_once ('Pc.php');
require_once ('Server.php');

class ComputerFactory 
{

    public static function getComputer($type,$ram,$hdd,$cpu)
    {
        if(strcasecmp("PC",$type)==0)
        { 
            return new PC($ram,$hdd,$cpu);
        }
        else if(strcasecmp("Server",$type)==0)
        {
            return new Server($ram,$hdd,$cpu);
        }
		return null;
	}
}
?>