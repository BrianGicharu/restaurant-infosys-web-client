<?php
include_once('settings.php');


// Function to hash a password
function passwordHash(?string $pass): ?string
{
    return password_hash(md5(md5($pass)), PASSWORD_BCRYPT);
}


//compare 2 passwords
function matchPassword(?string $pwd_1, ?string $pwd_2): bool
{
    return password_verify($pwd_1, $pwd_2);
}
