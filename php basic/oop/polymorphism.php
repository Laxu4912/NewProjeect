<?php
class Person{
    public $name;
    public $age;
    public $email;

    public function displayinformation(){
        echo "Name:$this->name  <br> Age: $this->age<br> Email: $this->email";
    }
}

$person = new Person;
$person->name= "ALON";
$person->age="20";
$person->email="cklaxman86@gmail.com";

$person->displayinformation();
?>


<?php
class Calculator{
    public function add ($a=0, $b=0,$c=0){
        return $a+$b+$c;
    }

    public function subtract($a=0, $b=0,$c=0){
        return $a-$b-$c;
    }

}

$add 



?>