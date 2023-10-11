<?php


interface Laxu{

    // public $name; 


    // protected function test() : int;  // return type in php(after php 8.)
    public function test() : int;
}

interface intface{
    public function test1();

}



class Pranish implements Laxu{
    public function test() : int{
       return 4;
    }

    public function test1(){

    }

}

?>