/*2.Izračunati sumu prvih 100 prirodnih brojeva korištenjem forpetlje */

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadatak 2 – rješenje</title>
  </head>
  <body>
  <h1>2.Izračunati sumu prvih 100 prirodnih brojeva korištenjem forpetlje </h1>
    <p>Zadatak 2 – rješenje</p>

    <?php
           for ($i=0; $i <=100 ; $i++)
           {
             $sum=+$i;
             echo $sum."<br>";
           }
     ?>
  </body>
</html>
