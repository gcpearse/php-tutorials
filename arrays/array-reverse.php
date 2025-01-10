<?php

$birds = [
    'Eagle',
    'Falcon',
    'Hawk'
];

// Reverse the elements in the input array, returning a new array
$reversed_birds = array_reverse($birds);
// Reverse the elements in the input array, preserving the keys in the original array
$preserved_keys = array_reverse($birds, true);

print_r($reversed_birds);
print_r($preserved_keys);
print_r($birds);
