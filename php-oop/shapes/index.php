<?php

require 'circle.php';
require 'rectangle.php';

$circle = new Circle(10);
echo $circle;

$circle->setRadius(20);
echo $circle;

$square = new Rectangle(10, 10);
echo $square;

$square->setHeight(5);
$square->setWidth(5);
echo $square;
