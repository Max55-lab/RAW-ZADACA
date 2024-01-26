<?php

class Kalkulator {
    public function zbroji($a, $b) {
        return $a + $b;
    }

    public function oduzmi($a, $b) {
        return $a - $b;
    }

    public function pomnozi($a, $b) {
        return $a * $b;
    }

    public function podijeli($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Nije moguće dijeljenje s nulom.";
        }
    }
}

// Primjeri korištenja kalkulatora
$kalkulator = new Kalkulator();

echo "Zbroj: " . $kalkulator->zbroji(5, 3) . "<br>";
echo "Razlika: " . $kalkulator->oduzmi(8, 2) . "<br>";
echo "Umnožak: " . $kalkulator->pomnozi(4, 6) . "<br>";
echo "Kvocijent: " . $kalkulator->podijeli(9, 3) . "<br>";
?>
