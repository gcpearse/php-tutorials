<?php

// Enable strict typing in this file
declare(strict_types=1);

function divide(int $x, int $y): int|float
{
    return $x / $y;
}

echo divide(10, 5) . "\n";
echo divide(9, 5) . "\n";
