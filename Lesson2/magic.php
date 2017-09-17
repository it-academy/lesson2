<?php
class Test {
    public function __get($varName){
      return "Some var" . PHP_EOL;  
    }
}

$test = new Test();

echo $test->name;
echo $test->nameAnother;
?>