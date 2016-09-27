<?php 

require_once 'Square.php';

$rectangle = new Rectangle(24, 42);
echo "The area for a rectangle with the height of: " . $rectangle->height . " and the width of: " . $rectangle->width . " = " . $rectangle->area() . PHP_EOL;

$square = new Square(10, 10);
echo "The perimeter of a square with the height of: " . $square->height . " and the width of: " . $square->width . " = " . $square->perimeter() . PHP_EOL;