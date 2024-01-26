<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ispis teksta</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["unosTeksta"], $_GET["broj"])) {
            $tekst = $_GET["unosTeksta"];
            $broj = $_GET["broj"];

            for ($i = 1; $i <= $broj; $i++) {
                echo "<p>$i. $tekst</p>";
            }
        }
    }
    ?>
</body>
</html>
