<?php

require_once ('Player.php');

$player1 = new Queue();
$player2 = new Queue();
$player3 = new Queue();
$player4 = new Queue();

$cards = new DeckOfCards();
$player = new Player();
$player->setCards($cards->cards());
$cards = $player->getCards();
$cards = $player->shuffle($cards);
for ($x=0;$x<count($cards);$x++) 
{
    if($x < 13)
    {

        $player1->enqueue($cards[$x]);   //pushing values into the queue
    }
    else if ($x< 26 && $x >= 13) 
    {

        $player2->enqueue($cards[$x]);   //pushing values into the queue
    }
    else if ($x < 39 && $x >= 26) 
    {
        $player3->enqueue($cards[$x]);   //pushing values into the queue
    }
    else 
    {
        $player4->enqueue($cards[$x]);   //pushing values into the queue
    }
}
$arr1 = explode(" ",$player1->getData());     //splitting data that is in the queue
$arr2 = explode(" ",$player2->getData());     //splitting data that is in the queue
$arr3 = explode(" ",$player3->getData());     //splitting data that is in the queue
$arr4 = explode(" ",$player4->getData());     //splitting data that is in the queue
$arr1 = $player->sortCards($arr1);
$arr2 = $player->sortCards($arr2);
$arr3 = $player->sortCards($arr3);
$arr4 = $player->sortCards($arr4);

$player1 = new Queue();
for($x=0;$x<count($arr1);$x++)
{
    $player1->enqueue($arr1[$x]);   //pushing values into the queue
}

$player2 = new Queue();
for($x=0;$x<count($arr2);$x++)
{
    $player2->enqueue($arr2[$x]);   //pushing values into the queue
}


$player3 = new Queue();
for($x=0;$x<count($arr3);$x++)
{
    $player3->enqueue($arr3[$x]);   //pushing values into the queue
}


$player4 = new Queue();
for($x=0;$x<count($arr4);$x++)
{
    $player4->enqueue($arr4[$x]);   //pushing values into the queue
}
$players = new Queue();
$players->enqueue( $player1);
$players->enqueue( $player2);
$players->enqueue( $player3);
$players->enqueue( $player4);

echo "All players in the queue with thier cards are\n\n";
echo "Player 1 with cards ".$player1->getData()."\n";
echo "Player 2 with cards ".$player2->getData()."\n";
echo "Player 3 with cards ".$player3->getData()."\n";
echo "Player 4 with cards ".$player4->getData()."\n";
?>