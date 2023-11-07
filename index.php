<?php
    require_once './Class/Coin.php';
    require_once './Class/Deck.php';
    require_once './Class/Dice.php';
    require_once './Class/GameMaster.php';
    require_once './Class/GameValue.php';
    require_once './Interface/RandomGeneratorInterface.php';




$gameMasterZangdar = new gameMaster();
$gameMasterZangdar->addDevicePocket($deck1 = new Deck($nbCouleur = new gameValue(3), $valeur = new gameValue(18)));
$gameMasterZangdar->addDevicePocket($deck1 = new Deck($nbCouleur = new gameValue(4), $valeur = new gameValue(13)));
$gameMasterZangdar->addDevicePocket($dice = new Dice(($face = new gameValue(12))));
$gameMasterZangdar->addDevicePocket($dice = new Dice(($face = new gameValue(20))));
$gameMasterZangdar->addDevicePocket($coin = new Coin($nbLance = new gameValue(4)));
$gameMasterZangdar->addDevicePocket($coin = new Coin($nbLance = new gameValue(2)));
$gameMasterZangdar->pleaseGiveMeACrit(80);

