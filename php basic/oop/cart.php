<?php
class Cart{
    public $id;
    public $product;

}

class Item{
    public $id;
    public $name;
    public $price;

}

class Course{
    public $id;
    public $name;
    public $price;
}

$item= new Item;
$item->id="1";
$item->name="shirt";
$item->price="500";



$course= new Course;
$course->id="1";
$course->name="php";
$course->price="5000";

$cart = new Cart;
$cart->id="1";
$cart->product=$item;

echo $cart->product->id


?>






