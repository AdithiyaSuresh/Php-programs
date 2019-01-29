<?php
  include 'Utility.php';
  echo "enter the stake ";
  $stake = Utility::stake_Input();
  echo "enter the goal ";
  $goal = Utility::goal_Input($stake);
  echo "enter the no of times to play ";
  $num = Utility::no_Of_Times();
  echo Utility::gambler($stake,$goal,$num);
?>