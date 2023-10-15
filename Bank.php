<?php

class Bank
{
    public $accno;
    public $name;
    public $balance = 0;

    function depositAmout($amt)
    {
        $this->balance = $this->balance + $amt;
        return;
    }
    function deductAmount($amt)
    {
        if ($this->balance <= 0) {
            echo "No Bank Balance Available";
        }
        if ($this->balance < $amt) {
            echo "Current balance is less than the required amount";
        }
        $this->balance = $this->balance - $amt;
    }
        function checkBalance()
        {
            echo " Your Current Balance: " . $this->balance;
        }
    
}

$bank1 = new Bank();
$bank1->accno = 101;
$bank1->name = "John Smith";
$bank1->balance = 5000;

$bank1->depositAmout(2000);
echo $bank1->checkBalance() . "<br>";

$bank1->deductAmount(3000);
echo $bank1->checkBalance();
