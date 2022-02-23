<?php
declare(strict_types=1);
// típus kényszerítés. ha nincs bekapcsolva, akkor nem veszi annyira komolyan a megadott típusokat, mepróbálja konvertálni
// 0 vagy 1. 1: be van kapcsolva

include 'function.php';

hello();

helloName("Anna");
helloName("Péter");
helloName("Krisztián");

echo PHP_EOL;
echo PHP_EOL;

echo "Téglalp (3,4) területe: " . rectangleArea(3, 4).PHP_EOL;
echo "Téglalp (3,5.3) területe: " . rectangleArea(3, 5.3).PHP_EOL;
echo "Téglalp (3,10) területe: " . rectangleArea(3, 10).PHP_EOL;

echo PHP_EOL;
echo PHP_EOL;

echo "Derékszögű háromszög befogói (2,4), átfogója: " . round(triangleThirSide(2,4), 2);

echo PHP_EOL;
echo PHP_EOL;

echo "Szorzás 2*3= ".multiply(2,3).PHP_EOL;
echo "Szorzás 2* = ".multiply(2,).PHP_EOL;

// mappa létrehozás: rekurzív mappa
// lehet túlterhelni függvényt

echo PHP_EOL;
echo PHP_EOL;

echo "Szorzás 2*3*6= ".multiply2(2,3, 6).PHP_EOL;
echo "Szorzás 2*3* = ".multiply2(2,3,).PHP_EOL;
echo "Szorzás 2* *4= ".multiply2(2,c:4).PHP_EOL; // mkir('asd/asd/agwe', recursive: true);
