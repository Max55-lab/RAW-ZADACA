<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadatak 10– rješenje</title>
  </head>
  <body>
  <h1>5.Napišite PHP funkciju unutar skripte za promjenu svih vrijednosti ulaznog polja na način
  da sve članove polja promijeni u mala ili velika slova.
  Funkcija ima dva ulazna argumenta, ulazno polje i željeni oblik ispisa unesen kao niz (UPPER ILI LOWER).
  Na kraju skripte uraditi više poziva funkcije…
Primjer input polja :
$boje = array('B' => 'Blue', 'G' => 'Green', 'r' => 'Red');
Očekivani izlaz :
Vrijednosti u  lowercase.
Array ( [B] =>blue [G] =>green [r] => red )
Vrijednosti u  uppercase.
Array ( [B] => BLUE [G] => GREEN [r] => RED )
</h1>
    <h2>Zadatak 10– rješenje</h2>

    <?php
    function promijeniSlova($polje, $oblik)
{
    $noviPolje = [];
    foreach ($polje as $kljuc => $vrijednost) {
        if ($oblik == 'UPPER') {
            $noviPolje[$kljuc] = strtoupper($vrijednost);
        } elseif ($oblik == 'LOWER') {
            $noviPolje[$kljuc] = strtolower($vrijednost);
        }
    }
    return $noviPolje;
}

$boje = array('B' => 'Blue', 'G' => 'Green', 'r' => 'Red'); // primjer input polja

echo "Vrijednosti u lowercase.\n";
print_r(promijeniSlova($boje, 'LOWER'));

echo "Vrijednosti u uppercase.\n";
print_r(promijeniSlova($boje, 'UPPER'));
     ?>
  </body>
</html>
