<?php

require 'animal.php';
require 'cat.php';
require 'dog.php';

$animals = [
    $dog = new Dog(),
    $cat = new Cat(),
];

foreach ($animals as $animal) {
    echo $animal->makeSound();
}
