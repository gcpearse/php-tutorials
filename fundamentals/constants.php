<?php

$price = 100;

// Defined at compile time
const VAT = 0.2;

$price = $price * (VAT + 1);

// Defined at run time
if (VAT >= 0.2) {
    define('DISCOUNT', 0.05);
} else {
    define('DISCOUNT', 0.0);
}

$total = $price - $price * DISCOUNT;

echo $total;
