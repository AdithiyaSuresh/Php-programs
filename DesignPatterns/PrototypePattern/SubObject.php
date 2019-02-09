
<?php

/**
 * SubObject class
 */
class SubObject
{
    //static variable instances initialized to zero
    static $instances = 0;
    //member variable instance 
    public $instance;

    /**
     * constructor of the class 
     * incrementing static instances each time an object of class is created and storing it in membe rinstance 
     */
    public function __construct() 
    {
        $this->instance = ++self::$instances;
    }

    /**
     * Magic Method clone to clone the attributes/properties of the object
     */
    public function __clone() 
    {
        //incrementing static of class and storing it in member variable
        $this->instance = ++self::$instances;
    }
}
?>