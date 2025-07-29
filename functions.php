<?php

function generatePassword($password_length, $numbers, $letters, $special_characters)
{
    $caratteri_password = '';

    if ($numbers == 'on') {
        $caratteri_password .= '0123456789';
    }
    if ($letters == 'on') {
        $caratteri_password .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($special_characters == 'on') {
        $caratteri_password .= '!@#$%^&*()-_=+[]{};:,.<>/?|`~';
    }

    if ($caratteri_password == '') {
        $caratteri_password = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{};:,.<>/?|`~';
    }

    $password = '';
    $max_index = strlen($caratteri_password) - 1;

    for ($i = 0; $i < $password_length; $i++) {
        $password .= $caratteri_password[random_int(0, $max_index)];
    }

    return $password;
}
