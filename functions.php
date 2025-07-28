 <?php

if (isset($_GET['password_length']) && is_numeric($_GET['password_length'])) {
    $password_length = (int)$_GET['password_length'];
} else {
    return;
};

function generatePassword($password_length)
{
    $caratteri_password = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_=+[]{};:,.<>/?|`~';
    return substr(str_shuffle($caratteri_password), 0, (int)$password_length);
}

generatePassword($password_length);
session_start();

$_SESSION['password_length'] = $password_length;


?>