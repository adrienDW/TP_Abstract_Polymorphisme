<?php
    require_once './Class/GameValue.php';
    require_once './Interface/RandomGenerator.php';

class Coin implements RandomGenerator{
    private $value;
    public function __construct(protected gameValue $nbLances)
    {

    }
    public function generateValue(){
        $tentative = 0;
        while($tentative <= $this->nbLances->value){
            $resultRand = rand(0, 1);
            $this->value = 1;
            if($resultRand != 1){
                $this->value = 0;
                break;
            }
            $tentative ++;
        }
        return $this->value;
    }
    public function chooseValue(int $val){
        $this->value = $val;
    }
    public function getCurrentValue(){
        return $this->value;
    }

}