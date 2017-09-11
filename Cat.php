<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 11.09.2017
 * Time: 15:23
 */
require_once  'Animal.php';

class Cat extends Animal
{

    function  __construct($name)
    {
        parent::__construct($name);
    }

    function meow():string {
        return "Cat {$this->name} is saying meow";
    }

}