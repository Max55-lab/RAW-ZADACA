<?php

class Test {
    public $ime;
    public $prezime;
    public $ostvareniBodovi;
    public $maxBodovi;
    public $ocjena;

    public function __construct($ime, $prezime, $ostvareniBodovi, $maxBodovi) {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->ostvareniBodovi = $ostvareniBodovi;
        $this->maxBodovi = $maxBodovi;
        $this->izracunajOcjenu();
    }

    private function izracunajOcjenu() {
        $postotak = ($this->ostvareniBodovi / $this->maxBodovi) * 100;

        if ($postotak >= 90) {
            $this->ocjena = 5;
        } elseif ($postotak >= 75) {
            $this->ocjena = 4;
        } elseif ($postotak >= 60) {
            $this->ocjena = 3;
        } elseif ($postotak >= 50) {
            $this->ocjena = 2;
        } else {
            $this->ocjena = 1;
        }
    }
}

// Inicijalizacija objekta s različitim vrijednostima
$test1 = new Test("John", "Doe", 80, 100);
$test2 = new Test("Jane", "Smith", 95, 100);

echo "Ocjena za " . $test1->ime . ": " . $test1->ocjena . "<br>";
echo "Ocjena za " . $test2->ime . ": " . $test2->ocjena . "<br>";
?>
