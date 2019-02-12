<?php

    /**
     *require the following to work
     */
    require "/home/bridgeit/Adithiya/OOPrograms/Utility.php";
    require_once ('Facade.php');
    require_once ('Subsystem1.php');
    require_once ('Subsystem2.php');

    /**
     * The client code works with complex subsystems through a simple interface
     * provided by the Facade. The client code may have some of the subsystem's objects already created. In
     * this case, it might be worthwhile to initialize the Facade with these objects
     * instead of letting the Facade create new instances.
     */

    /**
     *testing the facade implementation
     */
    echo "\n FACADE PATTERN\n\n";
    $subsystem1 = new Subsystem1;
    $subsystem2 = new Subsystem2;
    
    //initializing facade object
    $facade = new Facade($subsystem1,$subsystem2);

    //taking input from user for the type of subsytem
    echo "enter the type of subsytem to perform operations\n";
    echo "enter 1 for subsytem1 and 2 for subsytem2\n";
    $num = Utility::integer_Input();

    //calling operation function of facade
    echo $facade->operation($num);
 ?>