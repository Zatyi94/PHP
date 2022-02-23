<?php

// File > New > PHP Class

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