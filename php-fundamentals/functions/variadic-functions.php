<?php

function sum(int|float ...$nums): int|float
{
    return array_sum($nums);
}

echo sum(0.1, 1, 2, 3, 4, 5) . "\n";
