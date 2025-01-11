<?php

$strings = ['a', 'aa', 'z', 'b', 'ccc', 'd', 'eeee', 'ff', 'bbb', 'bb'];

usort($strings, function ($a, $b) {
    if (strlen($a) === strlen($b)) {
        return $a <=> $b;
    }

    return strlen($a) <=> strlen($b);
});

print_r($strings);
