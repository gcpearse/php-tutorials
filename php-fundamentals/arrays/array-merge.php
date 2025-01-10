<?php

// Merging two indexed arrays
$fruits = ['apple', 'banana', 'cherry'];
$vegetables = ['carrot', 'onion'];

$ingredients = array_merge($fruits, $vegetables);
print_r($ingredients);

// Merging two associative arrays
$my_items = [
    'pen' => 5,
    'pencil' => 3
];

$your_items = [
    'ruler' => 1,
    'pen' => 2
];

// Note how 'pen' => 5 from $my_items is overwritten
$our_items = array_merge($my_items, $your_items);
print_r($our_items);
