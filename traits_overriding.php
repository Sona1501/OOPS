<?php
trait hello{
    public function sayhello(){
        echo "Hello from Hello trait.\n";
    }
}
trait hi{
    public function sayhello(){
        echo "Hello from Hi trait.\n";
    }
}
class base{
    use hello,hi{
        hello::sayhello insteadof hi;
    }
}
$test= new base();
$test->sayhello();