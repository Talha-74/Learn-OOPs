<?php
interface Database {
    // Establish the connection
    function OpenConnection();
}
class OracleDatabase implements Database {
    function OpenConnection() {
echo "using the Oracle Driv to establish the connection";
    }
}
class MYSQLDatabase Implements Database {
    function OpenConnection() {
      echo "Using the MYSQL Driver to establish the connection";  
    }
}
Interface Animals_2 {
    function makeSounds();
}
class Dogs2 implements Animals_2 {
    function makeSounds() {
        echo "Dogs barks bobobo"."</br>";
    }
}
class Cats implements Animals_2 {
    function makeSounds() {
        echo "cats sounds meo meo"."</br>";
    }
}

$obj1 = new Dogs2;
$obj1->makeSounds();

$obj2 = new Cats;
$obj2->makeSounds();