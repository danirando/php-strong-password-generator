<?php

session_start();


require_once './functions.php';

echo "<h1>Password generata: " . generatePassword($_SESSION['password_length']);
