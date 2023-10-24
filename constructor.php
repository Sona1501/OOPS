<?php
class person{
    public $name;
    public $age;

    function __construct($n= "No Name", $a = 0){
        $this->name=$n;
        $this->age=$a;
    }

    function show(){
        echo $this->name . " - " . $this->age . "<br>";
    }
}
 $p1=new person("sonakshi" , 21);
 $p2=new person();


 $p1->show();
 $p2->show();



          //Another example

 class Employee {
    public $name;
    public $position;
    public $salary;

    // Constructor
    public function __construct($name, $position, $salary) {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
        echo "A new employee object has been created.\n";
    }

    function emp(){
        echo $this->name . " - " . $this->position . " - " .  $this->salary ;
       
    }
}

// Creating an employee with a constructor
$employee = new Employee("Alice", "Software Engineer", 80000);
$employee->emp();
?>