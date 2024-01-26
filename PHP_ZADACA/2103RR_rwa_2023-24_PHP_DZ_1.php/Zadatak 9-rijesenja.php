<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadatak 9– rješenje</title>
  </head>
  <body>
  <h1>9.	Napišite PHP program koji će sve članove polja $brojevi zbrojiti pomoću foreachpetlje:
$brojevi = array( 1, 22, 3, 4, 5, 55, 12, 49,94, 23, 7);
</h1>
    <h2>Zadatak 9– rješenje</h2>

    <?php
    $brojevi = array(1, 22, 3, 4, 5, 55, 12, 49, 94, 23, 7);
$zbroj = 0;

foreach ($brojevi as $broj)
{
    $zbroj += $broj;
}

echo "Zbroj članova polja je: $zbroj\n";
     ?>
  </body>
</html>
