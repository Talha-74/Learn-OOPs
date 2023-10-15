<?php

class Student
{
    public $name;
    public $class;

    function getName(): string
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getClass(): string
    {
        return $this->class;
    }
    public function setClass($class)
    {
        $this->class = $class;
    }
    public function printDetails()
    {
        echo $this->name . " is studing in ". $this->class." class.";
    }
}

$student1 = new Student();
$student1->setName('Smith');
$student1->setClass('8th');

$student1->printDetails();
