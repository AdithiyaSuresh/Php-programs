
<?php

require_once ('Utility.php');
require_once ('Queue.php');
require_once ('DeckOfCards.php');

class Player
{
	public $palyerNumber = 0;
    public $cards = null;	
    public $queue = null;

	/**
	 * setter to set the cards of a player
	 * @param a queue of cards
	 */
    public function setCards($cards) 
    {
		$this->cards = $cards;
	}
	
	/**
	 * returns q queue of cards of a player
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
	public function setPlayerNumber($num) {
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
        $num = count($cards);
        $cards = Utility::insertion_Sort_Num($cards,$num);
        return $cards;
    }

    public function shuffle($deck)
    {
        $cards = new DeckOfCards();
        $deck = $cards->shuffle($deck);
        return $deck;
    }
    
}
?>