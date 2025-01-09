<?php

$message = "Global scope\n";

function test_scope(): void
{
    $message = "Local scope\n";
    echo $message;

    global $message;
    echo $message;
}

test_scope();

function increment(): int
{
    // A static variable retains its value between function calls
    static $count = 0;
    $count++;
    return $count;
}

for ($i = 0; $i < 3; ++$i) {
    echo increment() . "\n";
}
