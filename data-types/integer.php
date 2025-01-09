<?php

// Bytes used to store an integer on this system
echo PHP_INT_SIZE . "\n";

// Largest and smallest integers on this system
echo PHP_INT_MAX . "\n";

echo PHP_INT_MIN . "\n";

// Use underscores to make long integers more readable
var_dump(is_int(1_000_000));

// Binary numbers begin with 0b
echo 0b1010 . "\n";
