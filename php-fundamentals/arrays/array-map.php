<?php

$numbers = [1, 2, 3];

$doubled_numbers = array_map(fn (int $n): int => $n * 2, $numbers);

print_r($doubled_numbers);
print_r($numbers);
