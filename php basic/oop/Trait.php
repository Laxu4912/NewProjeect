<?php
class Vehicle{
    public $model;
    public $name;
}

trait Driver{
    public $name;
    public $age;
}

class car extends Vehicle{
    use Driver;
}

?>