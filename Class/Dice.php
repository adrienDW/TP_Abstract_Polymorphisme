<?php
    require_once './Class/GameValue.php';
    require_once './Interface/RandomGeneratorInterface.php';

class Dice implements RandomGeneratorInterface{

    protected int $value = 0;
    
    public function __construct( 
        protected gameValue $nbFace)
    {

    }
    public function generateValue(){
        return rand(1, $this->nbFace->value);
    }
    public function chooseValue(int $val){
        if($val > $this->value){

        }
        $this->value = $val;
    }
    public function getCurrentValue(){
        return $this->value;
    }
    public function getNbValue(){
        return $this->nbFace->value;
    }
}