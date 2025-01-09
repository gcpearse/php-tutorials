<?php

$books = [
    'Lord of the Flies' => 'William Golding',
    '1984' => 'George Orwell'
];

foreach ($books as $key => $value) {
    echo "'$key' was written by $value.\n";
}
