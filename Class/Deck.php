<?php
    require_once './Class/GameValue.php';
    require_once './Interface/RandomGenerator.php';

class Deck implements RandomGenerator{
    private $value;
    // private array $couleurs = ['coeur', 'trèfle', 'carreau', 'pique'];
    public function __construct( protected gameValue $nbCouleurs, protected gameValue $valeur)
    {
        $this->value = 0;
    }
    public function generateValue(){
        return $val = rand(1, ($this->nbCouleurs->value * $this->valeur->value));
    }
    public function chooseValue(int $val){
        $this->value = $val;
    }
    public function getCurrentValue(){
        return $this->value;
    }
}