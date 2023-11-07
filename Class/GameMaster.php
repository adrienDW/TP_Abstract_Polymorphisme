<?php
    require_once './Class/Coin.php';
    require_once './Class/Deck.php';
    require_once './Class/Dice.php';
    require_once './Class/GameValue.php';


class gameMaster {
        public  $deviceInPocket = [];
    public function __construct(){}
    public function addDevicePocket(object $device){
        array_push($this->deviceInPocket, $device);
    }
    public function getPocket(){
        return $this->deviceInPocket;
    }
    public function pleaseGiveMeACrit(int $critChance){
        $device = rand(0, count($this->deviceInPocket)-1);
        $value = $this->deviceInPocket[$device]->generateValue();
        if((($this->deviceInPocket[$device]->generateValue()/$this->deviceInPocket[$device]->getNbValue())*100) > $critChance){
            echo "Critique réussi";
        }else{
            echo "Critique raté";
        }
    }
}