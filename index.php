<?php
    require_once './Class/Coin.php';
    require_once './Class/Deck.php';
    require_once './Class/Dice.php';
    require_once './Class/GameMaster.php';
    require_once './Class/GameValue.php';
    require_once './Interface/RandomGenerator.php';



$dice6 = new Dice($face = new gameValue(6));
echo $dice6->generateValue();
echo $dice6->getCurrentValue();

$dollarCoin = new Coin($lancer = new gameValue(2));
echo $dollarCoin->generateValue();
$deckCard = new Deck($nbCouleur = new gameValue(4), $valeur = new gameValue(14));
echo $deckCard->generateValue();


$gameMasterZangdar = new gameMaster($deck1 = new Deck($nbCouleur = new gameValue(3), $valeur = new gameValue(18)),
 $deck2 = new Deck($nbCouleur = new gameValue(4), $valeur = new gameValue(13)),
 $coin1 = new Coin($lancer = new gameValue(10)),
 $coin2 = new Coin($lancer = new gameValue(12)),
 $dice1 = new Dice($face = new gameValue(20)), $dice2 = new Dice($face = new gameValue(3)));