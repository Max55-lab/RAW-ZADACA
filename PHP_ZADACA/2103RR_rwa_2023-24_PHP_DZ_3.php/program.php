<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["broj"], $_GET["operacija"])) {
        $broj = $_GET["broj"];
        $operacija = $_GET["operacija"];

        // Provjera unosa broja
        if (!is_numeric($broj)) {
            echo "Molim unesite broj.";
            exit;
        }

        // Provjera unosa operacije
        if ($operacija !== "KVADRAT" && $operacija !== "KUB") {
            echo "Molim odaberite ispravnu operaciju.";
            exit;
        }

        // Izračun i ispis rezultata
        $rezultat = ($operacija === "KVADRAT") ? $broj * $broj : $broj * $broj * $broj;

        echo "Poslali ste broj: $broj<br>";
        echo "Operacija je: $operacija BROJA<br>";
        echo "Rezultat je: $rezultat";
    } else {
        echo "Molim unesite sve podatke.";
    }
}
?>
