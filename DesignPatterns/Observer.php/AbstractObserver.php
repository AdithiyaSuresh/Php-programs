
<?php

/**
 * abstarct class AbstractObserver
 */
abstract class AbstractObserver 
{
    /**
     * abstarct functions of abstarct class which child class should override
     * have no implementations 
     * @return void
     */
    abstract function update(AbstractSubject $subject_in);
}
?>