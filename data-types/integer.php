<?php

// Bytes used to store an integer on this system
echo PHP_INT_SIZE;
echo '<br>';

// Largest and smallest integers on this system
echo PHP_INT_MAX;
echo '<br>';

echo PHP_INT_MIN;
echo '<br>';

// Use underscores to make long integers more readable
var_dump(is_int(1_000_000));
echo '<br>';

// Binary numbers begin with 0b
echo 0b1010;
echo '<br>';
