
    <?php

    /** 
     * program to create a Player Object having Deck of Cards, and having ability to Sort by Rank 
     * and maintain the cards in a Queue implemented using Linked List. Do not use any Collection 
     * Library.Further the Player are also arranged in Queue. Finally Print the Player and the 
     * Cards received by each Player.
    */


    //require following to work
    require_once ('Player.php');

    //creating 4 player object that points to queue
    $player1 = new Queue();
    $player2 = new Queue();
    $player3 = new Queue();
    $player4 = new Queue();

    //instantiating deckofclass class
    $cards = new DeckOfCards();

    //instantiating player class
    $player = new Player();

    //calling setter of player class to set cards
    $player->setCards($cards->cards());

    //getter to get tha cards
    $cards = $player->getCards();

    //calling shuffle to shuffle tha cards
    $cards = $player->shuffle($cards);

    //looping over the array and adding cards to each player using queue
    for ($x=0;$x<count($cards);$x++) 
    {
        if($x < 13)
        {
            //pushing values into the queue
            $player1->enqueue($cards[$x]);   
        }
        else if ($x< 26 && $x >= 13) 
        {
            //pushing values into the queue
            $player2->enqueue($cards[$x]);   
        }
        else if ($x < 39 && $x >= 26) 
        {
            //pushing values into the queue
            $player3->enqueue($cards[$x]);  
        }
        else 
        {
            //pushing values into the queue
            $player4->enqueue($cards[$x]);  
        }
    }

    //splitting data that is in the queue using queue getdata method that returns the a string
    $arr1 = explode(" ",$player1->getData());     
    $arr2 = explode(" ",$player2->getData());     
    $arr3 = explode(" ",$player3->getData());     
    $arr4 = explode(" ",$player4->getData());   
    
    //sorting the cards of each player
    $arr1 = $player->sortCards($arr1);
    $arr2 = $player->sortCards($arr2);
    $arr3 = $player->sortCards($arr3);
    $arr4 = $player->sortCards($arr4);

    //adding sorted cards to each player
    $player1 = new Queue();
    for($x=0;$x<count($arr1);$x++)
    {
        //pushing values into the queue
        $player1->enqueue($arr1[$x]);   
    }

    $player2 = new Queue();
    for($x=0;$x<count($arr2);$x++)
    {
        //pushing values into the queue
        $player2->enqueue($arr2[$x]);   
    }


    $player3 = new Queue();
    for($x=0;$x<count($arr3);$x++)
    {
        //pushing values into the queue
        $player3->enqueue($arr3[$x]);   
    }


    $player4 = new Queue();
    for($x=0;$x<count($arr4);$x++)
    {
        //pushing values into the queue
        $player4->enqueue($arr4[$x]);   
    }

    //arranging each player in a queue
    
    //creating new queue
    $players = new Queue();

    //adding players to queue
    $players->enqueue( $player1);
    $players->enqueue( $player2);
    $players->enqueue( $player3);
    $players->enqueue( $player4);

    //printing each player and his cards 
    echo "All players in the queue with thier cards are\n\n";
    echo "Player 1 with cards ".$player1->getData()."\n";
    echo "Player 2 with cards ".$player2->getData()."\n";
    echo "Player 3 with cards ".$player3->getData()."\n";
    echo "Player 4 with cards ".$player4->getData()."\n";
    ?>