<?php
class Animals
{
    protected $name;
    protected $hunt = false;

    function doesHunting()
    {
        if ($this->hunt) {
            echo "Yes it hunts";
        } else {
            echo "No". "<br/>";
        }
    }
}
class Dogs extends Animals
{
    function __construct($name, $hunt)
    {
        $this->name = $name;
        $this->hunt = $hunt;
    }
    function makeSound()
    {
        echo "Woof Woof". "<br />";
    }
}
class Tigers extends Animals
{
    function __construct($name, $hunt)
    {
        $this->name = $name;
        $this->hunt = $hunt;
    }
    function makeSound()
    {
        echo "<br/>"."Grrr Grrr". "<br/>";
    }
}

$dog1 = new Dogs("Hush Puppies", false);
$dog1->makeSound();
$dog1->doesHunting();

$tiger1 = new Tigers("IndianTiger", True);
$tiger1->makeSound();
$tiger1->doesHunting();