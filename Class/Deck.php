<?php
    require_once './Class/GameValue.php';
    require_once './Interface/RandomGeneratorInterface.php';

class Deck implements RandomGeneratorInterface{
    private $value;
    public function __construct( protected gameValue $nbCouleurs, protected gameValue $valeur)
    {
        $this->value = 0;
    }
    public function generateValue(){
        return rand(1, ($this->nbCouleurs->value * $this->valeur->value));
    }
    public function chooseValue(int $val){
        $this->value = $val;
    }
    public function getCurrentValue(){
        return $this->value;
    }
    public function getNbValue()
    {
        return $this->nbCouleurs->value * $this->valeur->value;
    }
}