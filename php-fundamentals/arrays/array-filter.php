<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$is_prime = function (int $n): bool {
    if ($n < 2) return false;

    for ($i = 2; $i < $n; $i++) {
        if ($n % $i === 0) return false;
    }

    return true;
};

$primes = array_filter($numbers, $is_prime);

print_r($primes);
