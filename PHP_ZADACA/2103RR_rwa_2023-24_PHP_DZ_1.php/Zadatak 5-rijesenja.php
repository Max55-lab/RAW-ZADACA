<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadatak 5– rješenje</title>
  </head>
  <body>
  <h1>5.Ispisati sve troznamenkaste parne brojevi!</h1>
    <h2>Zadatak 5– rješenje</h2>

    <?php
    $i=99;
           while ($i<1000)
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
