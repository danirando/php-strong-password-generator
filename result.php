<?php

session_start();

require_once './functions.php';

if (isset($_SESSION['generated_password'])) {
    echo "<p>Password generata: " . ($_SESSION['generated_password']) . "</p>";
} else {
    echo "<p>Nessuna password generata. Torna alla <a href='index.php'>pagina iniziale</a> per crearne una.</p>";
}
