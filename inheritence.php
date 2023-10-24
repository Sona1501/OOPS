<?php
class employee{
    public $name;
    public $age;
    public $salary;


    function __construct($n, $a, $s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;

    }
    function info(){
        echo "<h3>Employee Details</h3>";
        echo "Employee name: " . $this->name . "<br>";
        echo "Employee age: " . $this->age . "<br>";
        echo "Employee salary: " . $this->salary . "<br>";
    }
}


class manager extends employee{
    public $ta = 2000;
    public $phone = 500;
    public $totalsalary;

    function info(){
        $this->totalsalary = $this->ta + $this->phone + $this->salary;
        echo "<h3>Manager Profile</h3>";
        echo "Employee name: " . $this->name . "<br>";
        echo "Employee age: " . $this->age . "<br>";
        echo "Employee salary: " . $this->totalsalary . "<br>";
    }
}


$e1=new employee("sonakshi", 21, 500000);
$e2=new manager("sona", 20, 50000);
$e1->info();
$e2->info();