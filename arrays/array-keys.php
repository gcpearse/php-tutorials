<?php

$nums = [100, 2, 3, 100, 5, 6, 100, 8, 9, 100, '100'];

// Get the keys of all elements strictly equal to 100
$keys = array_keys($nums, 100, true);
print_r($keys);

$grades = [
    'Student A' => 'A',
    'Student B' => 'B',
    'Student C' => 'A',
    'Student D' => 'C',
    'Student E' => 'B',
    'Student F' => 'A',
];

$keys = array_keys($grades, 'A', true);
print_r($keys);

// array_key_exists() returns true if the value of a key is null
var_dump(array_key_exists('Student G', $grades));
// isset() returns false if the value of a key is null
var_dump(isset($grades['Student G']));
