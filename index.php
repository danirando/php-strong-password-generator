<?php
session_start();
require_once './functions.php';

// Controlla se arrivano i dati dal form (GET)
if (isset($_GET['password_length']) && is_numeric($_GET['password_length'])) {
    $password_length = (int)$_GET['password_length'];
    $numbers = isset($_GET['numbers']) ? $_GET['numbers'] : '';
    $letters = isset($_GET['letters']) ? $_GET['letters'] : '';
    $special_characters = isset($_GET['special_characters']) ? $_GET['special_characters'] : '';

    // Genera la password
    $password = generatePassword($password_length, $numbers, $letters, $special_characters);
    $_SESSION['generated_password'] = $password;

    header('Location: ./result.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8" />
    <title>Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container mt-3">
    <h1>Strong password generator</h1>
    <hr>
    <form action="" method="GET" class="form-control d-flex gap-3 align-items-center">
        <label for="password_length">Lunghezza Password</label>
       <input type="number" name="password_length" id="password_length" placeholder="8" required min="1" value="<?= htmlspecialchars($_GET['password_length'] ?? '') ?>">

        <button class="btn btn-primary">Genera</button>
        <label for="numbers">Numeri</label>
        <input type="checkbox" name="numbers" id="numbers">
        <label for="letters">Lettere</label>
        <input type="checkbox" name="letters" id="letters">
        <label for="special_characters">Caratteri Speciali</label>
        <input type="checkbox" name="special_characters" id="special_characters">
    </form>
</div>
</body>
</html>
