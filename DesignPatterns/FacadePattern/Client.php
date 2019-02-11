<?php

    /**
     *require the following to work
     */
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
    
    //calling operation function of facade
    echo $facade->operation(1);
    echo $facade->operation(2);
 ?>