<?php

class Animal {
    
    protected function performMove(){
        
    }
    public function move(){
        
        $this->performMove();
        
    }
}
class Duck extends Animal{
    protected function performMove(){
        echo "Fly in forest" . PHP_EOL;
    }
  }

class Rabbit extends Animal{
    protected function performMove(){
        echo "Run in forest" . PHP_EOL;
    }
  }

$animal1 = new Duck();
$animal1->move();

$animal2 = new Rabbit();
$animal2->move();


?>