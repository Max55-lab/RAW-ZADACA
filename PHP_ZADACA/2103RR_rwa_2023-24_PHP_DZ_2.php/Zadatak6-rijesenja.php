<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadatak 10– rješenje</title>
  </head>
  <body>
  <h1>6.	Napišite PHP skriptu s funkcijom za izračun i prikaz prosječne temperature,
  deset  najnižih i desetnajviših temperatura. Funkcija ima samo jedan ulazni argument,
  niz temparature (niz/string , vrijednosti odvojene zarezom) – primjer niza temperature:
$temparature="78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
</h1>
    <h2>Zadatak 10– rješenje</h2>

    <?php
    function temperatureStatistika($temperaturaString)
  {
      $temperature = explode(',', $temperaturaString);
      $average = array_sum($temperature) / count($temperature);
      sort($temperature);
      $top10 = array_slice($temperature, -10);
      $bottom10 = array_slice($temperature, 0, 10);

      echo "Prosječna temperatura: $average\n";
      echo "Deset najviših temperatura: " . implode(', ', $top10) . "\n";
      echo "Deset najnižih temperatura: " . implode(', ', $bottom10) . "\n";
  }

  $temparature = "78,60,62,68,71,68,73,85,66,64,76,63,81,76,73,68,72,73,75,65,74,63,67,65,64,68,73,75,79,73"; // primjer niza temperature

  temperatureStatistika($temparature);
     ?>
  </body>
</html>
