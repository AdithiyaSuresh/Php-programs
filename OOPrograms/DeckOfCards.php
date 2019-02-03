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
    public function cards()
    {
        $deck = [];
        $i = 0;
        for ($x=0;$x<count($this->suit);$x++) 
        {
            for ($y=0;$y<count($this->rank);$y++) 
            {
                $deck[$i++] = $this->rank[$y].",".$this->suit[$x];//pushing all the elmets into the deck array

            }
        }
        return $deck;
    }
    public function shuffle($deck)
    {
        $totalCount = (count($this->suit)*count($this->rank));
        for ($x=0;$x<$totalCount;$x++) 
        {
            //methond to take the random numbers to arrange the cards randomly
            $random = mt_rand(0,$totalCount-1);
            $temp = $deck[$x]; //taking element ref in temprovory variable
            $deck[$x] = $deck[$random];
            $deck[$random] = $temp;
        }
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
        return $this->cards;
    }

    //function to shuffle the cards
    public function shuffleCards()
    {
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

    //function to distribute cards for 
    public function distributeCards($cards,$numOfPlayers,$numOfCards)
    {
        $arr = [];
        for($i=0;$i<$numOfPlayers;$i++)
        {
            for($j=0;$j<$numOfCards;$j++)
            {
                $arr[$i][$j] = $cards[$i][$j];
            }
        }
        return $arr;
    }

    public function printCards($cards)
    {
        for($i=0;$i<count($cards);$i++)
        {
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