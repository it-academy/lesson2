<?php

class Photographer {
    
   public function MakePhoto()
   {
      echo "Make photo" . PHP_EOL;   
      $this->photoby(); 
   
   }
    
}
class Duck extends Photographer {
    protected function photoby() {
       echo "about duck" . PHP_EOL;
  
    }
}
class Dog extends Photographer {
    protected function photoby() {
        echo "about dog" . PHP_EOL;
  
    }
}

$a1 = new Duck();
$a1->MakePhoto();

$a2 = new Dog();
$a2->MakePhoto();
?>
