<?php

  //require the following to work 
  require_once ('PatternSubject.php');

  /**
   * program to test the working of observer pattern
   */
  echo "BEGIN TESTING OBSERVER PATTERN\n";
  echo "\n";

  //creating instance of PatternSubject class
  $pattern = new PatternSubject();

  //creating instance of PatternSubject class
  $patternObserver= new PatternObserver();

  //attaching observer
  $pattern->attach($patternObserver);

  //updating the favourites by notifying
  $pattern->updateFavorites('abstract factory, decorator, visitor');
  $pattern->updateFavorites('abstract factory, observer, decorator');

  //detaching the observer
  $pattern->detach($patternObserver);

  //again updating the favourites by notifying
  $pattern->updateFavorites('abstract factory, observer, paisley');

  echo "END TESTING OBSERVER PATTERN\n";

?>