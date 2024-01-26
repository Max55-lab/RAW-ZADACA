<?php
function Operacija($brojA, $brojB, $operacija) {
    // Provjera jesu li svi parametri zadani
    if (isset($brojA, $brojB, $operacija)) {
        // Provjera jesu li brojevi
        if (is_numeric($brojA) && is_numeric($brojB)) {
            // Provjera je li operacija podržana
            if (in_array($operacija, ['+', '-', '*', '/'])) {
                // Izvrši odgovarajuću operaciju
                switch ($operacija) {
                    case '+':
                        return $brojA + $brojB;
                    case '-':
                        return $brojA - $brojB;
                    case '*':
                        return $brojA * $brojB;
                    case '/':
                        // Provjera dijeljenja s nulom
                        if ($brojB != 0) {
                            return $brojA / $brojB;
                        } else {
                            return "Dijeljenje s nulom nije dozvoljeno.";
                        }
                    default:
                        return false;
                }
            } else {
                return "Nepodržana operacija.";
            }
        } else {
            return "Uneseni brojevi nisu valjani.";
        }
    } else {
        return "Nisu dostavljeni svi potrebni podaci.";
    }
}

$rezultat = null;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Provjera jesu li dostavljeni potrebni parametri
    if (isset($_GET["brojA"], $_GET["brojB"], $_GET["operacija"])) {
        $brojA = $_GET["brojA"];
        $brojB = $_GET["brojB"];
        $operacija = $_GET["operacija"];

        // Pozivanje funkcije za izvođenje operacije
        $rezultat = Operacija($brojA, $brojB, $operacija);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <form method="get" action="kalkulator.php">
        <label for="brojA">Broj A:</label>
        <input type="text" name="brojA" required><br>

        <label for="brojB">Broj B:</label>
        <input type="text" name="brojB" required><br>

        <label for="operacija">Operacija:</label>
        <select name="operacija" required>
            <option value="+" <?php echo ($operacija == '+') ? 'selected' : ''; ?>>Zbrajanje</option>
            <option value="-" <?php echo ($operacija == '-') ? 'selected' : ''; ?>>Oduzimanje</option>
            <option value="*" <?php echo ($operacija == '*') ? 'selected' : ''; ?>>Množenje</option>
            <option value="/" <?php echo ($operacija == '/') ? 'selected' : ''; ?>>Dijeljenje</option>
        </select><br>

        <input type="submit" value="Rezultat">
    </form>

    <?php
    // Prikaz rezultata ako postoji
    if ($rezultat !== null) {
        echo "<p>Rezultat operacije: $brojA $operacija $brojB = $rezultat</p>";
    }
    ?>
</body>
</html>
