<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 11.09.2017
 * Time: 15:23
 */
class Animal
{
    function __construct($name)
    {
        $this->name = $name;
    }

    function getName() : string {
        return $this->name;
    }

}