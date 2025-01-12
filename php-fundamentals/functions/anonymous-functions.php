<?php

// Assign an anonymous function to a variable and pass it to array_map()
$halve = function (int|float $n): int|float {
    return $n / 2;
};

$prices = [1, 3, 10, 20];

$halved_prices = array_map($halve, $prices);

print_r($halved_prices);

// Write an anonymous callback function within array_map()
$discount = 0.9;

$discounted_prices = array_map(function (int|float $price) use ($discount): int|float {
    return $price * $discount;
}, $prices);

print_r($discounted_prices);

// Closure (return a function from a function)
function create_incrementer(int $increment): Closure
{
    return function (int $n) use ($increment): int {
        return $n + $increment;
    };
}

$increment_by_one = create_incrementer(1);
echo $increment_by_one(10) . "\n";

$increment_by_two = create_incrementer(2);
echo $increment_by_two(5) . "\n";
