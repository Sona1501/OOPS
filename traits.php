<?php
trait hello{
    public function sayHello(){
        echo "Hello Everyone";
    }
    public function sayHi(){
        echo "Hi Everyone";
    }
}
trait bye{
    public function saybye(){
        echo "Bye bye everyone";
    }
}
class base{
    use hello, bye;

}
class base2{
    use hello;

}
$test= new base();
$test2= new base2();
$test->sayHello();
echo "<br>";
$test->saybye();
echo "<br>";
$test->sayHi();