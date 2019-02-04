<?php

//class for deck of cards
class DeckOfCards
{
    //member functions

    //initializing array to null
    public $suit = null;
    public $rank = null;
    public $cards = null;

    //constructor for initializing member function
    public function __construct()
    {
        //initializing member variable
        $this->suit = array("Club","Diamond", "Heart", "Spade");
        $this->rank = array("2", "3", "4", "5", "6", "7", "8", "9", "10","Jack", "Queen", "King", "Ace");
        $this->cards = [];
    }
    
    /*
    * function to initialize and return cards
    */
    public function cards()
    {
        //taking an empty array
        $deck = [];
        $i = 0;
        
        //looping over and adding elemnts of rank and suit array to a new array
        for ($x=0;$x<count($this->suit);$x++) 
        {
            for ($y=0;$y<count($this->rank);$y++) 
            {
                //pushing all the elments into the deck array
                $deck[$i++] = $this->rank[$y].",".$this->suit[$x];

            }
        }
        //returning initialized array
        return $deck;
    }

    /*
    * function to shuffle the cards 
    */
    public function shuffle($deck)
    {
        //calculating the total count of array to generate random number within that range
        $totalCount = (count($this->suit)*count($this->rank));

        //looping over to shuffle cards
        for ($x=0;$x<$totalCount;$x++) 
        {
            //methond to take the random numbers to arrange the cards randomly
            $random = mt_rand(0,$totalCount-1);

            //taking element ref in temporary variable
            $temp = $deck[$x]; 
            $deck[$x] = $deck[$random];
            $deck[$random] = $temp;
        }
        
        //returning shufffled array
        return $deck;
    }

    //function to initialize cards array
    //returns an array 
    public function initializeCards()
    {
        for($i=0;$i<count($this->suit);$i++)
        {
            for($j=0;$j<count($this->rank);$j++)
            {
                //storing cards from suit and rank in the cards array
                $this->cards[$i][$j] = $this->rank[$j]." ".$this->suit[$i];
            }
        }
        //returning initialized array
        return $this->cards;
    }

    //function to shuffle the cards
    public function shuffleCards()
    {
        //looping over to shuffle cards
        for($i=0;$i<count($this->suit);$i++)
        {
            for($j=0;$j<count($this->rank);$j++)
            {
                //generating random number to get the position in the array to shuffle
                $x = mt_rand(0,3);
                $y = mt_rand(0,12);
                
                //changing the array value position
                $temp = $this->cards[$x][$y];
                $this->cards[$x][$y] = $this->cards[$i][$j];
                $this->cards[$i][$j] = $temp;
            }
        }
        //returning the shuffled array
        return $this->cards;
    }

    /**
    *function to distribute cards for the players
    * @param cards,numOfPlayers,numOfCards
    * @return arr
    */
    public function distributeCards($cards,$numOfPlayers,$numOfCards)
    {
        //initializing an array
        $arr = [];
        //looping over and ditributing cards
        for($i=0;$i<$numOfPlayers;$i++)
        {
            for($j=0;$j<$numOfCards;$j++)
            {
                $arr[$i][$j] = $cards[$i][$j];
            }
        }
        //returning 2d array with distributed cards
        return $arr;
    }

    /**
    *function to print cards for each player
    * @param cards distibuted array
    */
    public function printCards($cards)
    {
        //looping over and getting each row as cards of each player
        for($i=0;$i<count($cards);$i++)
        {
            //printing cards of each player
            echo "player ".($i+1)." : ";
            for($j=0;$j<count($cards[$i]);$j++)
            {
                echo $cards[$i][$j].", ";
            }
            echo "\n";
        }
    }
}
?>