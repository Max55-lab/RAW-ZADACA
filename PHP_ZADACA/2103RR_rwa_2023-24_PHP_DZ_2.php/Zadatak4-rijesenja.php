<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadatak 10– rješenje</title>
  </head>
  <body>
  <h1>4.	Zadatak: Napisati PHP/HTML program koji generira sljedeći ispis unutar preglednika putem PHP koda.
  PHP kod računa faktorijel za svaki broj do broja koji unesemo kao argument funkcije.
  Program mora imati sljedeću strukturu –
  prvo definirati funkciju za faktorijel koja radi ispis kao u prozoru ispod
  (Izvršiti nekoliko poziva funkcije s proizvoljnim vrijednostima! –
  ovo je npr poziv funkcije za 9 koji je predan kao argument funkcije).</h1>
    <h2>Zadatak 10– rješenje</h2>

    <?php
    // Zadatak 4 - rješenje:
echo "\nZadatak 4 - rješenje:\n";

function faktorijel($broj)
{
    if ($broj <= 1) {
        return 1;
    } else {
        return $broj * faktorijel($broj - 1);
    }
}

$brojFaktorijela = 9; // primjer poziva za broj 9
echo "Faktorijel za broj $brojFaktorijela je: " . faktorijel($brojFaktorijela) . "\n";
     ?>
  </body>
</html>
