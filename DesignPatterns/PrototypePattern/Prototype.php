<?php

/********************************************************************************************
 * Purpose  : Program Shows The Implementation of FActory desingn pattern in php
 * File Name: FactoryPaterrn.php
 * Author   : Adithiya Suresh
 * Since    : 6/02/2019
 **********************************************************************************************/

/** 
 *require following to work
 */
require_once ('MyCloneable.php');
require_once ('SubObject.php');

//creating an object of MyCloneable class
$obj = new MyCloneable();

/**
 * instantiating SubObject class twice
 * ie member variable of MyCloneable class is now objects of SubObject class
 */
$obj->object1 = new SubObject(); 
$obj->object2 = new SubObject();

//cloning the obj to get a new object without using new and passing to obj2 variable
$obj2 = clone $obj;

//obj is the original object
print("Original Object:\n\n");
//printing original object
print_r($obj);

//obj2 is the new object
print("Cloned Object:\n\n");
//printing original object
print_r($obj2);

?>