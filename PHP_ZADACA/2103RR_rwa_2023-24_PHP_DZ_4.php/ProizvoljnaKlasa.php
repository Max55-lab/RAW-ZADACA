<?php

class ProizvoljnaKlasa {
    private $atributPrivatni;
    protected $atributZasticeni;
    public $atributJavni;

    public function __construct($privatni, $zasticeni, $javni) {
        $this->atributPrivatni = $privatni;
        $this->atributZasticeni = $zasticeni;
        $this->atributJavni = $javni;
    }

    public function ispisPrivatnogAtributa() {
        echo "Privatni atribut: " . $this->atributPrivatni . "<br>";
    }

    public function ispisZasticenogAtributa() {
        echo "Zasticeni atribut: " . $this->atributZasticeni . "<br>";
    }

    public function ispisSpojenihAtributa() {
        echo "Spojeni atributi: " . $this->atributPrivatni . " " . $this->atributZasticeni . "<br>";
    }

    public function ispisJavnogAtributa() {
        echo "Javni atribut: " . $this->atributJavni . "<br>";
    }
}

// Kreiranje objekta i pozivanje metoda
$objekt = new ProizvoljnaKlasa("privatni", "zasticeni", "javni");
$objekt->ispisPrivatnogAtributa();
$objekt->ispisZasticenogAtributa();
$objekt->ispisSpojenihAtributa();
$objekt->ispisJavnogAtributa();
?>
