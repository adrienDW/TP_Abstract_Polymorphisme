<?php
    require_once './Class/Coin.php';
    require_once './Class/Deck.php';
    require_once './Class/Dice.php';
    require_once './Class/GameValue.php';
class gameMaster{
    public function __construct( protected Deck $deck1, protected Deck $deck2, 
    protected Coin $coin1, protected Coin $coin2, protected Dice $dice1, protected Dice $dice2)
    {
        
    }
}