<?php

$countries = [
    'Indonesia',
    'Laos',
    'Thailand'
];

print_r($countries);

// Add an element
$countries[] = 'Vietnam';
print_r($countries);

// Change an element
echo $countries[0] . "\n";
$countries[0] = 'Cambodia';
echo $countries[0] . "\n";

// Remove an element
unset($countries[0]);
print_r($countries);

// Find length of array
echo count($countries) . "\n";
