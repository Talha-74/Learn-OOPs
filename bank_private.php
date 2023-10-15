<?php
Class bank {
    private $balance;
public function getBalance() {
    return $this->balance;
}   
public function __construct($balance) {
    $this->balance = $balance;
}
public function depositBalance($amt) {
    $this->balance = $this->balance + $amt;
}
public function deductBalance($amt) {
    if ($this->balance <= 0 ) {
echo " No balance available";
    } else if ($this->balance < $amt) {
        echo "require amount is greater than available balance <br";
    }
}
}