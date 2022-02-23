<?php

class Allat{

    /*
     * Láthatóság
     *  private - csak az osztályon belülről használható
     *  public - osztályon kívülről i elérhető
     *  proteted - leszármazottakból eléhető
     *
     * Módosító szó
     *  static - statikus elemek
     */

    private static int $allatokSzama = 0;
    public static function getAllatokSzama(): int
    {
        return self::$allatokSzama;
    }

    private int $labakSzama;
    private int $lepesekSzama;
    public string $name;

    // konstrukor fut le, amiko sinálunk egy példányt az osztályból
    // annak tudunk paaméereket átadni
    // konstruktor függvény neve megegyezik az osztály nevével a C#ban
    // itt: __construct()

    // osztály konstruktor: csak fut le
    public function __construct(int $labakSzama = 4)
    {
        Allat::$allatokSzama++;
        $this->labakSzama=0;
        $this->labakSzama=$labakSzama;
    }

    // nem muszáj konstruktor megadni, akkor lesz egy default
    // ha csinálsz, akkor lehet üres, vagy valamilyen paraméterrel ellátott is

    public function Lepes(){
        $this->lepesekSzama += $this->labakSzama;
            // osztály saját változójára csak a this-szel tudunk hivatkozni
    }

    /**
     * @return int
     */
    public function getLepesekSzama(): int
    {
        return $this->lepesekSzama;
    }
}

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
