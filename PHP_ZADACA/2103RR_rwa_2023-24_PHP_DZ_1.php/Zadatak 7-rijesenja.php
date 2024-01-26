<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadatak 6– rješenje</title>
  </head>
  <body>
  <h1>7.	Zadana je varijabla $gradkoja sadržava polje s članovima godina => brojstanovnika. Izračunajte:
a.	a) Prosječan broj stanovnika kroz sve godine?
b.	Koje godine je bilo najviše stanovnika?
c.	Koliko godina se provodilo mjerenje?
Primjer varijable
$grad = array(1995 =>24000, 1997 =>25510, 1998 =>29154, 2000 =>32124, 2002 =>33114);
</h1>
    <h2>Zadatak 7– rješenje</h2>

    <?php
  $grad = array(1995 => 24000, 1997 => 25510, 1998 => 29154, 2000 => 32124, 2002 => 33114);
  $prosjek = array_sum($grad) / count($grad);
  echo "<br>a) Prosječan broj stanovnika kroz sve godine: $prosjek<br>";

  $maxStanovnika = max($grad);
  $godinaMax = array_search($maxStanovnika, $grad);
  echo "b) Najviše stanovnika bilo je u godini $godinaMax<br>";

  $brojGodina = count($grad);
  echo "c) Mjerenje se provodilo $brojGodina godina<br>";
     ?>
  </body>
</html>
