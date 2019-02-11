
    <?php

    /********************************************************************************************
     * Purpose  : Program Shows The Implementation of FActory desingn pattern in php
     * File Name: FactoryPaterrn.php
     * Author   : Adithiya Suresh
     * Since    : 6/02/2019
     **********************************************************************************************/

    /**
     * top level exception handler function to handle exception
     */
    set_exception_handler(function ($e)
    {
        echo "\nException Occurred\n";
        echo $e->getMessage();
    });

    /** 
     *require following to work
    */
    require "/home/bridgeit/Adithiya/OOPrograms/Utility.php";
    require_once ('ComputerFactory.php');

    /** 
     * taking values for ram hdd and cpu for Pc from user
     */
    echo " FACTORY DESIGN PATTRERN\n\n";
    echo "enter the ram, hdd and cpu values for Pc\n";
    echo "ram = ";
    $ram = Utility::integer_Input();
    echo "hdd = ";
    $hdd = Utility::integer_Input();
    echo "cpu = ";
    $cpu = Utility::integer_Input();

    /** 
     * taking values for ram hdd and cpu for Server from user
     */
    echo "enter the ram, hdd and cpu values for Server\n";
    echo "ram = ";
    $ram1 = Utility::integer_Input();
    echo "hdd = ";
    $hdd1 = Utility::integer_Input();
    echo "cpu = ";
    $cpu1 = Utility::integer_Input();

    /** 
     * taking values for ram hdd and cpu for Laptop from user
     */
    echo "enter the ram, hdd and cpu values for Laptop\n";
    echo "ram = ";
    $ram2 = Utility::integer_Input();
    echo "hdd = ";
    $hdd2 = Utility::integer_Input();
    echo "cpu = ";
    $cpu2 = Utility::integer_Input();

    /** 
     * calling static function of ComputerFactory class to get the sub classes of computer
     */
    $pc = ComputerFactory::getComputer("pc",$ram,$hdd,$cpu);
    $server = ComputerFactory::getComputer("server",$ram1,$hdd1,$cpu1);
    $laptop = ComputerFactory::getComputer("laptop",$ram2,$hdd2,$cpu2);
    //printing Pc properties
    echo "Factory PC Config:: ".$pc->toString()."\n";
    //printing Server properties
    echo "Factory Server Config:: ".$server->toString()."\n";
    //printing Laptop properties
    echo "Factory Laptop Config:: ".$laptop->toString()."\n";

    /** 
     * using reflection to check properties of pc
     */
    echo "\nReflection To Check Properties\n";
    //creating new reflection object
    $ref = new ReflectionObject($pc);
    //prining properties
    print_r($ref->getProperties());
    ?>