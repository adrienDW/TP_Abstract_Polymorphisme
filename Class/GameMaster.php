<?php
    require_once './Class/Coin.php';
    require_once './Class/Deck.php';
    require_once './Class/Dice.php';
    require_once './Class/GameValue.php';
class gameMaster{
    public function __construct( protected RandomGenerator $gen)
    {
        
    }
}