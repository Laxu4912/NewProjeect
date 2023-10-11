<?php
class Car(){
    public $name, $color;

    function start($name){
        echo "$name is starting.";

    }

    function stop($name){
        echo "$name is stopped.";

    }
}
$suzuki= new Car();
$suzuki->name = "suzuki";
$suzuki->color = "red";
echo "{$suzuki->color} color {$suzuki->name}"
?>

