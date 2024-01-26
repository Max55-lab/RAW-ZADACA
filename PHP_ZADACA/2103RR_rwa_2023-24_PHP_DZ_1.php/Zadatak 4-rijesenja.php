<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadatak 4– rješenje</title>
  </head>
  <body>
  <h1>4.Napisati php skriptu/kod koja/i ispisuje sve parne brojeve od 1 do 100 , svaki broj u novom retku </h1>
    <p>Zadatak 4– rješenje</p>

    <?php
    $i=0;
           while ($i<=100)
           {
             $i++;
             if($i%2==0)
             {
               echo $i."<br>";
             }
           }
     ?>
  </body>
</html>
