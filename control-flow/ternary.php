<?php

$value = rand(0, 1);

// The shorthand ternary operator assigns $value to $result if $value is truthy, else 'default'
$result = $value ?: 'default';

echo $result;
