<?php

$values = [0, 1, false, true, '', 'hello'];

function assign_value($value): void
{
    // The shorthand ternary operator assigns $value to $result if $value is truthy, else 'default'
    $result = $value ?: 'default';
    echo $result . '<br>';
}

foreach ($values as $value) {
    assign_value($value);
}
