<?php

function hello(){
    echo "Hello ";
}

function helloName(string $name){
    // echo gettype($name);
    echo "Hello $name!".PHP_EOL;
}

function rectangleArea(float $a, float $b):float
{
    if ($a < 0 || $b < 0) {
        return 0;
    } else
        return $a * $b;
}

// derékszögű(befogók)
function triangleThirSide(float $a, float $b):float{
    return sqrt($a * $a + $b * $b);
}

function multiply($a, $b = 2){
    return $a * $b;
}

function multiply2($a, $b = 2, $c = 10){
    return $a * $b * $c;
}