<?php

require_once 'Cat.php';


$cat = new Cat('garfield');

var_dump($cat->getName() === 'garfield');

var_dump($cat->meow() === 'Cat garfield is saying meow');