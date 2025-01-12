<?php

$add = fn(int $a, int $b): int => $a + $b;
echo $add(1, 2) . "\n";

$numbers = [1, 2, 3];

$doubled_numbers = array_map(fn(int $a): int => $a * 2, $numbers);
print_r($doubled_numbers);

function generate_multiplier(int $multiplier): Closure
{
    // An arrow function has access to variables in its parent scope
    return fn(int $n): int => $n * $multiplier;
}

$multiply_by_five = generate_multiplier(5);
echo $multiply_by_five(3) . "\n";
