<?php

declare(strict_types=1);

$receipt = [
    [
        'cost' => 9.99,
        'quantity' => 2,
    ],
    [
        'cost' => 5.79,
        'quantity' => 3,
    ],
    [
        'cost' => 4.19,
        'quantity' => 4,
    ]
];

$total = array_reduce($receipt, function ($carry, $item): float {
    return $carry + $item['cost'] * $item['quantity'];
});

echo "$total\n";

// Set initial to 0 to return 0 rather than null when the input array is empty
$receipt = [];

$total = array_reduce($receipt, function ($carry, $item): float {
    return $carry + $item['cost'] * $item['quantity'];
}, 0);

echo "$total\n";
