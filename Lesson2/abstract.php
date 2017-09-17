<?php

interface Flyible {
    public function fly();
}

interface Swimable {
    public function swim();
}

class Duck implements Flyible, Swimable {
    public function fly(){
        echo "Duck fly" . PHP_EOL;
    }
    
    public function swim(){
        echo "Duck swim" . PHP_EOL;
    }
}
$duck = new Duck();
$duck->swim();
$duck->fly();
?>