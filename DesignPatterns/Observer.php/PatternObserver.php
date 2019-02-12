
<?php

//require the following to work
require_once ('AbstractObserver.php');

/**
 * class PatternObserver that extends AbstractObserver
 */
class PatternObserver extends AbstractObserver 
{
    /**
     * no argument constructor
     */
    public function __construct() 
    {}
    
    /**
     * overriden method of abstract class
     * @return void
     */
    public function update(AbstractSubject $subject) 
    {
      //logic for the update
      echo "*IN PATTERN OBSERVER - NEW UPDATE ALERT*\n";
      //calling function using the subject recieved
      echo " new favorite patterns: ".$subject->getFavorites()."\n";
      echo "*IN PATTERN OBSERVER - PATTERN UPDATE ALERT OVER*\n\n";      
    }
}
?>