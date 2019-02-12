
<?php

//require the following to work
require_once ('AbstractSubject.php');
require_once ('PatternObserver.php');

/**
 * class PatternSubject that extends AbstractSubject
 */
class PatternSubject extends AbstractSubject 
{
    //private member variable
    private $favoritePatterns = NULL;
    private $observers = array();

    /**
     * no argument constructor
     */
    function __construct() 
    {}
    
    /**
     * overriden method of abstarct class to register the observer
     * @return void
     */
    function attach(AbstractObserver $observer_in) 
    {
      //could also use array_push($this->observers, $observer_in);
      $this->observers[] = $observer_in;
      echo "Observer attached to subject\n\n";
    }
    
    /**
     * overriden method of abstarct class to un-register the observer
     * @return void
     */
    function detach(AbstractObserver $observer_in) 
    {
      //looping over and checking for the match
      foreach($this->observers as $okey => $oval) 
      {
        if ($oval == $observer_in) 
        { 
          //detaching once it finds the match
          unset($this->observers[$okey]);
          echo "Observer detached from subject\n\n";
        }
      }
    }
    
    /**
     * overriden method of abstarct class to notify the observer
     * @return void
     */
    function notify() 
    {
      foreach($this->observers as $obs) 
      {
        //notifying each observer by calling its update method
        $obs->update($this);
      }
    }
    
    /**
     * function of PatternSubject class which to update about the change
     * @return void
     */
    function updateFavorites($newFavorites) 
    {
      //updating
      $this->favorites = $newFavorites;
      //it calls the notify method of itself to internally update the observer
      $this->notify();
    }
    
    /**
     * function getFavorites called by observer inside update to get the change made
     * @return favorites change made
     */
    function getFavorites() 
    {
      return $this->favorites;
    }
}
?>