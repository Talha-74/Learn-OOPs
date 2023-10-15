<?php

class Calculator
{
    public $a;
    public $b;
    public $result;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        $this->result = $this->a + $this->b;
        echo "sum of " . $this->a . " and " . $this->b . " is " . $this->result;

    }
    // public function getA(): string
    // {
    //     return $this->a;
    // }
    // public function getB(): string
    // {
    //     return $this->b;
    // }
    // public function setA($a)
    // {
    //     $this->a = $a;
    // }
    // public function setB($b)
    // {
    //     $this->b = $b;
    // }
    // public function add()
    // {
    //     $this->result = $this->a + $this->b;
    // }
    // public function getResults()
    // {
    //     echo "sum of " . $this->a . " and " . $this->b . " is " . $this->result;
    // }
}

$cal1 = new Calculator(44, 20);
// $cal1->a = 44;
// $cal1->b = 55;
// $cal1->add();
// $cal1->getResults();
