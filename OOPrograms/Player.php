
<?php

//require the following  to work
require_once ('Utility.php');
require_once ('Queue.php');
require_once ('DeckOfCards.php');

//class player having deck of cards and ability to sort the cards
class Player
{
	//member functions 

	//initializing palyerNumber to zero
	public $palyerNumber = 0;

	//initializing cards to null
	public $cards = null;
	
	//initializing queue to null
    public $queue = null;

	/**
	 * setter to set the cards of a player
	 * @param cards queue of cards
	 */
    public function setCards($cards) 
    {
		$this->cards = $cards;
	}
	
	/**
	 * getter to return q queue of cards of a player
	 * @return queue of cards
	 */
    public function getCards() 
    {
		return $this->cards;
	}
	
	/**
	 * setter for the player number
	 * @param num player number
	 */
	public function setPlayerNumber($num) 
	{
		$this->palyerNumber = $num;
	}
	
	/**
	 * getter for the player number
	 * @return player number
	 */
    public function getPlayerNumber() 
    {
		return $this->palyerNumber;
	}
	
	/**
	 * sorts the cards of a player
	 */
    public function sortCards($cards) 
    {
		//length of array
		$num = count($cards);
		
		//calling insertion sort to sort
		$cards = Utility::insertion_Sort_Str($cards,$num);
		
		//returning sorted cards
        return $cards;
    }

	/**
	 * function to shuffle the cards
	 * @param deck sorted cards
	 */
    public function shuffle($deck)
    {
		//creating deckofcards object
		$cards = new DeckOfCards();
		
		//calling function of deckofcards to shuffle cards
		$deck = $cards->shuffle($deck);
		
		//returns shuffled cards
        return $deck;
    }
    
}
?>