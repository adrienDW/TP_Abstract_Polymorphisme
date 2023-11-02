<?php
    require_once './Class/GameValue.php';
    require_once './Interface/RandomGenerator.php';
class Dice implements RandomGenerator{
    private int $value;

    public function __construct( 
        protected gameValue $nbFace)
    {

    }
    public function generateValue(){
        $this->value = rand(1, $this->nbFace->value);
    }
    public function chooseValue(int $val){
        if($val > $this->value){

        }
        $this->value = $val;
    }
    public function getCurrentValue(){
        return $this->value;
    }
}