<?php

require_once 'Allat.php';

echo "Állatok száma: " . Allat::getAllatokSzama() . PHP_EOL;

$a = new Allat();
$a->name = "Pityuka";
echo $a->name;
echo PHP_EOL;
echo $a->getLepesekSzama();
echo PHP_EOL;
$a->Lepes();
echo $a->getLepesekSzama();

echo "Állatok száma: " . Allat::getAllatokSzama() . PHP_EOL;

echo PHP_EOL;
echo PHP_EOL;

$b = new Allat();
$b->name = "Sanyi";
$c = $b; // b-ben lélő referencia beállítása c-be is
// b és c változók ugyanarra a memória területre (ugyanarra az állatra) mutatnak
echo $b->name;
echo " - ";
echo $c->name;
// itt b és c is Sanyi

echo PHP_EOL;

$c->name="Guszti";
echo $b->name;
echo " - ";
echo $c->name;
// itt már Guszti lesz mindkettő

echo PHP_EOL;
echo PHP_EOL;

echo "Állatok száma: " . Allat::getAllatokSzama() . PHP_EOL;
