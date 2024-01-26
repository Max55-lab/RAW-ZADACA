<?php

class Person {
    public $ime;
    public $prezime;
    public $masa;

    public function __construct($ime, $prezime, $masa) {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->masa = $masa;
    }

    public function izracunajTezinuNaMjesecu() {
        $tezinaNaMjesecu = $this->masa * 0.165;
        return $tezinaNaMjesecu;
    }
}

// Inicijalizacija objekata s različitim vrijednostima
$osoba1 = new Person("John", "Doe", 70);
$osoba2 = new Person("Jane", "Smith", 50);

echo "Tezina " . $osoba1->ime . " na Mjesecu: " . $osoba1->izracunajTezinuNaMjesecu() . " kg<br>";
echo "Tezina " . $osoba2->ime . " na Mjesecu: " . $osoba2->izracunajTezinuNaMjesecu() . " kg<br>";
?>
