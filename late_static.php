<?php
class base{
    protected static $name = "sonakshi";
    public function show(){
        echo static::$name;
        echo self::$name;
    }
}
class derived extends base{
    protected static $name = "Raj";
}
$test = new derived();
$test->show();
?>