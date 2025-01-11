<?php

$user = [
    'php_pro',
    'p4ssw0rd',
    'php_pro@example.com'
];

// When destructuring an array, elements may be skipped
[$username, , $email] = $user;

echo "Username: $username\n";
echo "Email: $email\n";
