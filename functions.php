 <?php

if (isset($_GET['password_length']) && is_numeric($_GET['password_length'])) {
    $password_length = $_GET['password_length'];
} else {
    $password_length = 8;
};

function generatePassword($password_length)
{
    $caratteri_password = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_=+[]{};:,.<>/?|`~';
    return substr(str_shuffle($caratteri_password), 0, $password_length);
}

generatePassword($password_length);



?>