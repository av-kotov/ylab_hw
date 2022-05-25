<?php
$name = "Alex";

abstract class User{
    public $name;

    abstract function new();

    abstract function save();

    function getName(){
        print_r("I done! ");
    }
}

class Person extends User{

    function new(){
        echo "Done new.<br>";
    }

    function save(){
        echo "Done save.<br>";
    }

    function getName(){
        print_r(parent::getName() . "Здорово!");
    }

}

$user = new Person();
$user->save();
$user->new();
$user->getName();