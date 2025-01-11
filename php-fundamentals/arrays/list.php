<?php

$credentials = ['php_pro', 'p4ssw0rd'];

list($username, $password) = $credentials;

echo "Username: $username\n";
echo "Password: $password\n";

$country_info = [
    'capital' => 'Bangkok',
    'currency' => 'Thai Baht (THB)'
];

list('capital' => $capital, 'currency' => $currency) = $country_info;

echo "Capital: $capital\n";
echo "Currency: $currency\n";
