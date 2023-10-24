<?php
class calculation{
    public $a, $b, $c;

    function sum(){
       echo  $this->a + $this->b . "<br>";
    }
    function sub(){
       echo  $this->a - $this->b . "<br>";
    }

}

$cal1 = new calculation();
$cal1->a = 10;
$cal1->b = 20;
$cal1->sum() ;
$cal1->sub();


$cal2 = new calculation();
$cal2->a = 10;
$cal2->b = 20;
$cal2->sub();

?>
