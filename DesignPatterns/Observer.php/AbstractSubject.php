
<?php

/**
 * abstarct class AbstractSubject
 */
abstract class AbstractSubject 
{
    /**
     * abstarct functions of abstract class which child class should override
     * have no implementations 
     * @return void
     */
    abstract function attach(AbstractObserver $observer_in);
    abstract function detach(AbstractObserver $observer_in);
    abstract function notify();
}
?>