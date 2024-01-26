<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odabir dugmeta</title>
</head>
<body>
    <form method="get" action="ispis.php">
        <input type="submit" name="opcija" value="A">
        <input type="submit" name="opcija" value="B">
        <input type="submit" name="opcija" value="C">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["opcija"])) {
            $odabranoDugme = $_GET["opcija"];
            echo "<p>Odabrali ste dugme $odabranoDugme</p>";
        } else {
            echo "<p>Niste odabrali nijedno dugme</p>";
        }
    }
    ?>
</body>
</html>
