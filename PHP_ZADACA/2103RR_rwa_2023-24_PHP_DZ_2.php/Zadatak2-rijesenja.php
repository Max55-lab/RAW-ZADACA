<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadatak 2– rješenje</title>
  </head>
  <body>
  <h1></h1>
    <h2>Zadatak 2– rješenje</h2>

    <?php
    function aritmetickaSredina($broj1, $broj2)
{
    return ($broj1 + $broj2) / 2;
}

$broj1 = 5; // zamijenite s proizvoljnom vrijednosti
$broj2 = 10; // zamijenite s proizvoljnom vrijednosti

echo "Aritmetička sredina između $broj1 i $broj2 je: " . aritmetickaSredina($broj1, $broj2) . "\n";
     ?>
  </body>
</html>
