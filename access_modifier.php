<?php
class base{
    private $name;
    public function __construct($n){
        $this->name = $n;
    }

    public function show(){
        echo "Your name : " . $this->name . "<br>";
    }

}
class derived extends base{
    public function get(){
        echo "Your name : " . $this->name . "<br>";
    }
}
$test = new derived("sonakshi raj");
//$test->name = "sonakshi";
$test->show();