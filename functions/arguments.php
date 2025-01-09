<?php

$n = 5;

// By default, an argument is passed by value
function double($num): int
{
    return $num * 2;
}

echo double($n) . "\n";
echo "$n\n";

// Use & before a parameter to pass an argument by reference
function triple(&$num): int
{
    $num *= 3;
    return $num;
}

echo triple($n) . "\n";
echo "$n\n";
