<?php
interface RandomGeneratorInterface{
    public function generateValue();
    public function chooseValue(int $val);
    public function getCurrentValue();
    public function getNbValue();
}