<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadatak 8– rješenje</title>
  </head>
  <body>
  <h1>8.Napišite funkciju koja će ispitati da li je broj prost. Prosti brojevi su djeljivi isključivo sa samim sobom ili s 1.
    Zatim, ispišite sve proste brojeve manje od 100!</h1>
    <h2>Zadatak 8– rješenje</h2>

    <?php
    function isProst($broj)
  {
      for ($i = 2; $i <= sqrt($broj); $i++)
      {
          if ($broj % $i == 0)
          {
              return false;
          }
      }
      return true;
  }

  echo "Prosti brojevi manji od 100:\n";
  for ($i = 2; $i < 100; $i++)
  {
      if (isProst($i))
      {
          echo $i . "\n";
      }
  }
     ?>
  </body>
</html>
