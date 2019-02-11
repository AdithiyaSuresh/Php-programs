
<?php

require_once ('AbstractSubject.php');
require_once ('PatternObserver.php');

class PatternSubject extends AbstractSubject 
{
    private $favoritePatterns = NULL;
    private $observers = array();
    function __construct() 
    {}
    
    function attach(AbstractObserver $observer_in) 
    {
      //could also use array_push($this->observers, $observer_in);
      $this->observers[] = $observer_in;
      echo "Observer attached to subject\n\n";
    }
    
    function detach(AbstractObserver $observer_in) 
    {
      //$key = array_search($observer_in, $this->observers);
      foreach($this->observers as $okey => $oval) 
      {
        if ($oval == $observer_in) 
        { 
          unset($this->observers[$okey]);
          echo "Observer detached from subject\n\n";
        }
      }
    }
    
    function notify() 
    {
      foreach($this->observers as $obs) 
      {
        $obs->update($this);
      }
    }
    
    function updateFavorites($newFavorites) 
    {
      $this->favorites = $newFavorites;
      $this->notify();
    }
    
    function getFavorites() 
    {
      return $this->favorites;
    }
}
?>