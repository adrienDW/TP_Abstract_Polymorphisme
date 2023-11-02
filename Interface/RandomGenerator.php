<?php
interface RandomGenerator{
    public function generateValue();
    public function chooseValue(int $val);
    public function getCurrentValue();
}