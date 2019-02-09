
<?php

/** 
 *require following to work
 */
require_once ('SubObject.php');

/**
 * MyCloneable class
 */
class MyCloneable
{
    //member variable of MyCloneable class
    public $object1;
    public $object2;

    /**
     * Magic Method clone to clone the attributes/properties of the object
     */
    function __clone() 
    {
        //Force a copy of this->object, otherwise it will point to same object.
        $this->object1 = clone $this->object1;
    }
}
?>