<?php

// Prepend an element to an indexed array
$roles = [
    'user',
    'guest'
];

array_unshift($roles, 'supervisor');
print_r($roles);

array_unshift($roles, 'owner', 'admin');
print_r($roles);

// Prepend an element to an associate array
$books = [
    'Lord of the Flies' => 'William Golding',
    '1984' => 'George Orwell'
];

$books = ['Emma' => 'Jane Austen'] + $books;
print_r($books);
