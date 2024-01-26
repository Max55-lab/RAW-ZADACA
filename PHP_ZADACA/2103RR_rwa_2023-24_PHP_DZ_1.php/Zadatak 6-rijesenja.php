<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadatak 6– rješenje</title>
  </head>
  <body>
  <h1>6.Tspisati sve dvoznamenkaste brojevi djeljive s 3 i 5 ili s oba</h1>
    <h2>Zadatak 6– rješenje</h2>

    <?php
    $i=-1;
           while ($i<100)
           {
             $i++;
             if($i%3==0&&$i%5==0)
             {
               echo $i."<br>";
             }
           }
     ?>
  </body>
</html>
