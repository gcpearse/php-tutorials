<?php

$berries = ['blackberry', 'blueberry'];

$fruits = [...$berries, 'peach'];
print_r([...$berries, 'peach']);

$vegetables = ['carrot', 'onion'];

$ingredients = [...$fruits, ...$vegetables];
print_r($ingredients);

function is_prime(int $n): bool
{
    if ($n < 2) return false;

    for ($i = 2; $i < $n; $i++) {
        if ($n % $i === 0) return false;
    }

    return true;
}

function find_primes_in_range(int $x, int $y): Generator
{
    for ($i = $x; $i < $y; $i++) {
        if (is_prime($i)) yield $i;
    }
}

$primes = [...find_primes_in_range(1, 20)];
print_r($primes);
