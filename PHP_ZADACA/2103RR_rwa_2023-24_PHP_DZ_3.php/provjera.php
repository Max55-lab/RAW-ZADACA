<?php
function CheckPwd($password) {
    // Provjera minimalne duljine lozinke
    // Provjera sadržavanja brojeva i slova
    if (strlen($password) >= 6 && preg_match('/[0-9]/', $password) && preg_match('/[a-zA-Z]/', $password)) {
        return 1;
    } else {
        return 0;
    }
}

$username = "";
$password = "";
$isValidPassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Provjera lozinke
    $isValidPassword = CheckPwd($password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provjera</title>
</head>
<body>
    <form method="post" action="provjera.php">
        <label for="username">Korisničko ime:</label>
        <input type="text" name="username" value="<?php echo $username; ?>" required><br>

        <label for="password">Lozinka:</label>
        <input type="password" name="password" value="<?php echo $password; ?>" required><br>

        <input type="submit" value="Pošalji">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($isValidPassword) {
            echo "<p>Lozinka je valjana.</p>";
        } else {
            echo "<p>Lozinka nije valjana jer je pre jednostavna.</p>";
        }

        echo "<p>Uneseni podaci: Korisničko ime: $username, Lozinka: $password</p>";
    }
    ?>
</body>
</html>
