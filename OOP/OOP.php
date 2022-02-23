<?php

function hello(){
    echo "Hello ";
}

hello();

function helloName(string $name){
    // echo gettype($name);
    echo "Hello $name!".PHP_EOL;
}

helloName("Anna");
helloName("Péter");
helloName("Krisztián");

echo PHP_EOL;
echo PHP_EOL;

function rectangleArea(float $a, float $b):float{
    return $a * $b;
}

echo "Téglalp (3,4) területe: " . rectangleArea(3, 4).PHP_EOL;
echo "Téglalp (3,5.3) területe: " . rectangleArea(3, 5.3).PHP_EOL;
echo "Téglalp (3,10) területe: " . rectangleArea(3, 10).PHP_EOL;

echo PHP_EOL;
echo PHP_EOL;