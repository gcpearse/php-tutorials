<?php

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

print_r($matrix);

// Add a row
$matrix[] = [10, 11, 12];
print_r($matrix);

// Remove a row
unset($matrix[3]);
print_r($matrix);

// Remove (and replace) an element
array_splice($matrix[2], 2, 1);
print_r($matrix);

$matrix[2][2] = 9;

// Iterate over nested elements
foreach ($matrix as $row) {
    foreach ($row as $item) {
        echo "$item ";
    }
    echo "\n";
}

$results = [
    ['Student A', 69],
    ['Student B', 90],
    ['Student C', 45],
    ['Student D', 78],
];

// Sort results by score
usort($results, function ($a, $b) {
   return $a[1] <=> $b[1];
});

// Destructure the array and use the extracted variables
foreach ($results as $result) {
    [$student, $score] = $result;

    echo "$student scored $score%.\n";
}
