<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadatak 10– rješenje</title>
  </head>
  <body>
  <h1>3.	Napisati phpskriptu s pripadajućom PHP funkcijom koja ima jedan ulazni argumenta (niz brojčanih vrijednosti kao string,
  odvojenih zarezom),
  Funkcija zatim ispisuje aritmetičku  i geometrijsku sredinu između tih brojeva Izvršiti nekoliko poziva funkcije
  s proizvoljnim nizom vrijednostima!
</h1>
    <h2>Zadatak 10– rješenje</h2>

    <?php
    function sredine($niz)
  {
      $brojevi = explode(',', $niz);
      $aritmetickaSredina = array_sum($brojevi) / count($brojevi);
      $geometrijskaSredina = array_product($brojevi) ** (1 / count($brojevi));
      echo "Aritmetička sredina: $aritmetickaSredina\n";
      echo "Geometrijska sredina: $geometrijskaSredina\n";
  }

  $skup = "1,3,6,7,8,4,4,16,18,14,19"; // primjer niza vrijednosti

  sredine($skup);
     ?>
  </body>
</html>
