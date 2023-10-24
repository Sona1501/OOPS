<?php
class base{
    public $name = "Parent Class";
    public function calc($a,$b){
        echo $a * $b;
    }
}
class derived extends base{
    public $name = "Child Class";
    public function calc($a,$b){
        echo $a + $b;
    }
}
$test = new derived();
 //echo $test->name;
$test->calc(5, 5);